<?php

$line = [$_POST["title"],$_POST["description"],$_POST["year"]."-".$_POST["month"]."-".$_POST["day"], $_POST["priority"]];

$file = fopen("tasks.csv","a");

fputcsv($file, $line);

fclose($file);

header("Location: index.php");
?>