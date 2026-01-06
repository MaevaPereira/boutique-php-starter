<?php

//Crée un tableau $product avec les clés 
$product = [
        "name" => "laptop ", //La flèche => associe une clé à une valeur.
        "description" => "black laptop ",
        "price" => 499.99,
        "stock" => 20,
        "category" => "Electronics ",
        "brand" => "MSI ",
        
];
//Ajout new clé dateAdded avec la date du jour
$product ["dateAdded"] = "Jan 6 ";

//Modifie le prix (applique une remise de 10%)
$reduction = 0.10;
$product ["price"] = ($product["price"]*(1-$reduction));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1> Product: <?php echo ($product ["name"]) ?> </h1>

    <p> Description: <?php  echo ($product["description"]) ?> </p>

    <p> Price: <?php  echo ($product["price"]) ?> </p>

    <p> In stock: <?php  echo ($product["stock"]) ?> </p>

    <p> Category: <?php  echo ($product["category"]) ?> </p>

    <p> Brand: <?php  echo ($product["brand"]) ?> </p>
   
    <p> Date added: <?php  echo ($product["dateAdded"]) ?> </p>

</body>

</html>