<?php

$groceries = ["laptop ", "tv ", "phone ", "headphone ", "mouse "];

echo $groceries [0];
echo $groceries [1];  
echo $groceries [2]; 
echo $groceries [3]; 
echo $groceries [4]; 

//affichage premier article laptop
var_dump($groceries [0]); 

//le dernier article (utilise count())
var_dump($groceries[count($groceries)-1]); 

// nb d'article 5
echo count($groceries); 


//ajout 2 articles fin du tableau
$groceries[] = "radio";
$groceries[] = "walkie-talkie";

//Supprime le 3ème article
unset($groceries[3]);

//affiche le tableau final avec var_dump()
var_dump ($groceries);
?>