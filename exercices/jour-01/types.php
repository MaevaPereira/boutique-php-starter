<?php
    $a = "5";
    $b = 3;
    $c = $a + $b;

    var_dump($a);
    var_dump($b);
    var_dump($c);
    //string(1) "5" int(3) int(8) => Quand PHP additionne un string et un int il sort un résultat en int 

$price = "29.99€";
$result = $price + 10;
var_dump($result); //=> Pourquoi le deuxième exemple pose problème car ça affiche pleins de chiffre après la virgule au lieu du 0.30 (n'arrondi pas)
?>