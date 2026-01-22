<?php

$name = "Laptop";
$price = 359.99;
$stock = 23;

function onStock($stock)
{
    if ($stock >= 1) {
        return "Is in stock";
    } else {
        return "Out of stock";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?= $name ?></title>
</head>

<body>


    <h1> Product : <?= $name ?> </h1>
    <p> Price : <?= $price ?>$</p>
    <p>En stock : <?= $stock ?> </p>
    <p><span style="font-weight:bold; color:red"><?= onStock($stock) ?></span></p>


</body>

</html>