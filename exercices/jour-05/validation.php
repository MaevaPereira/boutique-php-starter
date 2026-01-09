<?php

//true si stock > 0
function isInStock($stock){
    if ($stock >0){
        return "true";
    }
    else{
        return "false";
    }
}

//true si discount > 0
function isOnSale($discount){
    if ($discount >0){
        return "true";
    }
    else{
        return "false";
    }
}

//true si ajouté il y a moins de 30 jours
function isNew($dateAdded){
    $daysSince = (time() - strtotime($dateAdded)) / 86400;
    if ($daysSince<30){
        return "true";
    }
    else{
        return "false";
    }
}

// true si stock >= quantity
function canOrder($stock, $quantity){
    if ($stock >= $quantity){
        return "true";
    }
    else{
        return "false";
    }
}

echo "Is in stock :" .isInStock(125);
echo "<br> Is on sale :". isOnSale(10);
echo "<br> Is new :". isNew("2025-12-15");
echo "<br> Can order : ". canOrder(500, 50);

?>