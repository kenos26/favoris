<?php

$file = fopen("tasks.csv", "a+");
$tasks = [];

// on démarre sciemment une boucle infinie
while(true){
	// on récupère la ligne csv suivante
	$ligne = fgetcsv($file);

	// si la ligne renvoie false, c'est qu'on est au bout du fichier
	if($ligne == false){
		// dans ce cas la on sort de la boucle
		break;
	}
	// sinon
	else{
		// on push dans un tableau des tâches la ligne qu'on vient de récupérer
		array_push($tasks, $ligne);
	}
}

// pour l'instant j'ai un include seulement
include "index.phtml";
?>