<?php
session_start();
require_once '../vendor/autoload.php';

use App\MailClass;

$response_recaptcha = $_POST["g-recaptcha-response"];

if (isset($response_recaptcha) && $response_recaptcha) {
  $secret = "6LfAzeAkAAAAAJAYZoQlq2AnpXBir4x3wiU2XLeD";
  $ip = $_SERVER["REMOTE_ADDR"];
  $validation_server = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response_recaptcha&remoteip=$ip");

  if (json_decode($validation_server)->success == true) {
    // obtenemos los datos 
    $data = [
      "name" => htmlentities(addslashes($_POST['name'])),
      "phone" => htmlentities(addslashes($_POST['phone'])),
      "email" => htmlentities(addslashes($_POST['email'])),
      "url" => htmlentities(addslashes($_POST['url'])),
      "notas" => htmlentities(addslashes($_POST['notas'])),
    ];

    // instanciamos la clase
    $mail = new MailClass();

    // usamos el metodo de consulta
    $send = $mail->contacto($data);

    if ($send) {
      $_SESSION["mail"] = 1;
    } else {
      $_SESSION["mail"] = 0;
    }
  } else {
    $_SESSION["mail"] = 0;
  }
} else {
  $_SESSION["mail"] = 0;
}

header("Location: /");