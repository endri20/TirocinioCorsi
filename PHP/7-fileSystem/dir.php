<?php

$dir = '7-fileSystem/';
$d = scandir($dir);

foreach($d as $entry){
    // Ignora '.' e '..'
  //  if ($entry === '.' || $entry === '..') {
  //      continue;
  //  }
    
    // Mostra il nome del file o della directory
    echo $entry . "<br>";
}

?>
