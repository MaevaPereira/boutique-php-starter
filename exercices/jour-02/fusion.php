<?php
//Crée deux tableaux de produits (noms seulement)
$clothes = ["T-shirt", "Jean", "Pull"];
$accessories = ["Ceinture", "Montre", "Lunettes"];


//Fusionne-les en un seul tableau $catalog
$catalog = array_merge ($clothes,$accessories);
print_r($catalog);

//Affiche le nombre total de produits
echo count($catalog);

//Ajoute un produit au début du tableau (cherche la fonction...)
array_unshift($catalog,"Bonnet");
var_dump($catalog);

?>