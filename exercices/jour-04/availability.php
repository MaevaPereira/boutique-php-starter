<?php

    $stock = 80;
    $active = true;
    $promoEndDate = "2026-01-09";

if ($stock > 0 && $active === true){
    echo "true ";
}
else{
    echo "false ";
}


if (strtotime($promoEndDate) > strtotime("now")){
    echo "In sold !!!" ;
}
 else {
   echo "Promo end date($promoEndDate)";
}

?>