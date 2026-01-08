<?php

// == Égal (valeur)
// ===  Identique (valeur ET type)

$a = 0;
$b = "";
$c = null;
$d = false;
$e = "0";


var_dump ($a == $b); // bool (false)
var_dump ($a === $b); //bool (false)

var_dump ($a == $c); //  bool(true) 
var_dump ($a === $c); // bool (false)


var_dump ($a == $d); // bool (true)  
var_dump ($a === $d); // bool (false)


var_dump ($a == $e); // bool (true) 
var_dump ($a === $e); // bool (false)

/*
Dans quel cas == donne un résultat inattendu ?
$a == $c, $d, $e car le résultat de la valeur est true alors qu'avec === le résultat est faux alors plus fible d'utiliser ===
*/
?>