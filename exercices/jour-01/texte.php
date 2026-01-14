<?php
$brand = "Nike";
$model = "Air Max";

/*
echo 'Chaussure ' .$brand.$model; //concaténation (.)

echo "<br>Chaussure {$brand} {$model}"; //interpolation (...)

echo sprintf("<br>Chaussures $brand $model"); //sprintf()
*/

$price = 99.99;
echo "Prix : $price €";  // Que s'affiche-t-il ? Affiche = Prix : 99.99 €
echo '<br>Prix : $price €';  // Et là ? Affiche = Prix : $price €

?>