<?php

$products = [
    ["name" => "Poké ball", "price" => 200, "stock" => 999], //index 0 du tab
    ["name" => "Super ball", "price" => 600, "stock" => 500], // index 1 du tab
    ["name" => "Ultra ball", "price" => 800, "stock" => 100], // index 2 du tab
    ["name" => "Luxe ball", "price" => 3000, "stock" => 20],
    ["name" => "Master ball", "price" => 1000000000, "stock" => 0],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($products as $product):?>
            <p>Product:  <?= $product["name"]?>,   <?= $product["price"]?>₽ </p>
            <p>In stock:  <?= $product["stock"]?></p>
    <?php endforeach; ?>
    </article>
</body>
</html>