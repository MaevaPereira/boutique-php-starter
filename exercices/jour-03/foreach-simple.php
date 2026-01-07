<?php

$firstNames = ["Pierre ","Marie ","C ","L ","Z "];

$i = 0;
foreach ($firstNames as $firstName) {
    $i++;
    echo ("<ul> <li> $i. $firstName </li> </ul>") ."<br>";
}
?>