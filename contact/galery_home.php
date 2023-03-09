<?php
$arrFiles = array();
$handle = opendir('./public/galery/');

if ($handle) {
  while (($entry = readdir($handle)) !== FALSE) {
    $arrFiles[] = $entry;
  }
}

closedir($handle);

unset($arrFiles[0]);
unset($arrFiles[1]);

asort($arrFiles);

$images = array_slice($arrFiles, 0, 8);

foreach ($images as $value) {
  echo "<picture class='picture-defer'>
          <img onclick='openBigImg(this.src)' class='image'  src='/public/img/default.png' data-img='./public/galery/" . $value .  "' alt='Expertos en refrigeración' title='Hvmrefrigeracion servicio de refrigeracion' width='100' height='100'>
        </picture>";
}