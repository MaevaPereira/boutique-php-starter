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

var_dump ($a == $c); //  bool(true) 0 null
var_dump ($a === $c); // bool (false)


var_dump ($a == $d); // bool (true)  0 false
var_dump ($a === $d); // bool (false)


var_dump ($a == $e); // bool (true) 
var_dump ($a === $e); // bool (false)

?>