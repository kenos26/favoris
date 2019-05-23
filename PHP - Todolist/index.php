<?php

$line= $_POST['description'], $_POST['end-date'],$_POST['dot']

$file= fopen("task.csv", "a+");
fputcsv ( $file , $line);
fclose($file);
var_dump($file);
?>
<!--
include index.phtml;
$line= [
      "Mort aux rats pour chat voisin",
      "Prévoir stock colle dentaire",
      "Inscription 3waLive - EN RETARD"];
$file= fopen("task.csv", "a");
$line= fgetcsv($file);
var_dump($line);
-->
