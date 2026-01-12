<?php

$products = [
    1 => ["name" => "X-wing", "price" => 99.99 ],
    2 => ["name" => "Razor Crest", "price" => 579.99],
    3 => ["name" => "Death Star", "price" => 999.99],
    4 => ["name" => "Falcon Millenium", "price" => 24.99],
    5 => ["name" => "Destroyer Chimaera", "price" => 666.99],
];

$id = $_GET["id"] ?? null;

if ($id >= 1 && $id <=5){
echo "Produit n°$id: ".$products[$id]["name"] . " " .$products[$id]["price"] ."$";
}
else{
    echo "Product not found";
}

?>