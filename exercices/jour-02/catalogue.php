<?php

$products = [
    ["name" => "Poké ball", "price" => 200, "stock" => 999],
    ["name" => "Super ball", "price" => 600, "stock" => 500],
    ["name" => "Ultra ball", "price" => 800, "stock" => 100],
    ["name" => "Luxe ball", "price" => 3000, "stock" => 20],
    ["name" => "Master ball", "price" => 1000000000, "stock" => 0],
];

//Modifie le stock du 2ème produit (ajoute 10 unités)
$products[4]["stock"] = +10;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p> Produit 3: <?=$products[2]["name"]?></p>
    <p> Price produit 1: <?=$products[0]["price"]?> </p>
    <p> Stock dernier produit: <?=$products[4]["stock"]?> </p>

</body>

</html>