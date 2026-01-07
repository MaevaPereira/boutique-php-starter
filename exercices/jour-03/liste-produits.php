<?php

$products = [
    ["name" => "Poké ball", "price" => 200, "stock" => 999],
    ["name" => "Super ball", "price" => 600, "stock" => 500],
    ["name" => "Ultra ball", "price" => 800, "stock" => 100],
    ["name" => "Luxe ball", "price" => 3000, "stock" => 20],
    ["name" => "Master ball", "price" => 1000000000, "stock" => 0],
];

foreach ($products as $product) {
    echo $product["name"] . " : " . $product["price"] . "₽<br>" . $product["stock"] . " In stock<br>";
}
?>
