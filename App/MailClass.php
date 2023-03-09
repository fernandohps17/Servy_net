<?php

namespace App;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailClass
{
  private $host = 'smtp.ionos.es';
  private $userName = 'formularios@hvmrefrigeracion.com';
  private $password = 'FormularioHVM2023$$$';
  private $smtpSecure = 'tls';
  private $port = 587;
  private $charset = 'UTF-8';
  private $configMail;

  public function __construct()
  {
    $this->configMail = new PHPMailer(true);
    $this->configMail->isSMTP();
    $this->configMail->SMTPDebug  = 0;
    $this->configMail->SMTPAuth   = true;
    $this->configMail->Host       = $this->host;
    $this->configMail->Username   = $this->userName;
    $this->configMail->Password   = $this->password;
    $this->configMail->SMTPSecure = $this->smtpSecure;
    $this->configMail->Port       = $this->port;
    $this->configMail->CharSet    = $this->charset;
    $this->configMail->isHTML(true);
    $this->configMail->setFrom('formularios@servynet.es', 'Consulta de la WEB servinet.es');
    $this->configMail->AddAddress('info@servynet.es');
  }



  public function contacto($data)
  {
    try {
      $this->configMail->Subject = "CONTACTO DEL CLIENTE: " . $data['name'] . " ( " . $data['phone'] . " ) -  https://www.servynet.es/";
      $this->configMail->Body    =
        "	
      <html>
        <head>
          <title>HTML</title>
        </head>
        <body>
          <a href='https://www.servynet.es/'>
          <img src='https://www.servynet.es/public/img/servynet-agencia-marketing-digital-posicionamiento-seo-logo-servynet.webp' alt='logo' title='logo'>
          </a>
          <h1>El siguiente cliente ha realizado un contacto:</h1>
          <p> </p>

          <h2>WEB: https://www.servynet.es/</h2>
          <p> </p>	  
          <p><strong>Nombre Cliente: </strong>" . $data['name'] . "</p>
          <p><strong>Teléfono: </strong>" . $data['phone'] . "</p>
          <p><strong>Email: </strong>" . $data['email'] . "</p>
          <p><strong>Url: </strong>" . $data['url'] . "</p>
          <p><strong>Notas: </strong>" . $data['notas'] . "</p>
          <p></p>
          <p><strong>Aceptada Políticas de Privacidad.</strong></p>

        </body>
      </html>
      ";
      $this->configMail->send();
      return true;
    } catch (Exception $e) {
      return false;
    }
  }
}
