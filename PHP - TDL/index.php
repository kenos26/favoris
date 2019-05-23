<?php
// $line= ["Apprendre le CSV", "Cours sur le CSV","22-05-2019"];
// $file= fopen("task.csv", "a");
// fputcsv ( $file , $line);
$file= fopen("task.csv", "a+");
$line= fgetcsv($file);
var_dump($line);
fclose($file)
?>
