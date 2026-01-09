<?php


//Montant de la TVA
function calculateVat($priceExcludingTax, $rate) {
    $vat = ($rate/100) * $priceExcludingTax;
    return $vat ;
}


//Prix TTC
function calculateIncludingTax($priceExcludingTax, $rate){
    $priceIncludingTax = $priceExcludingTax * (1 + $rate/100);
    return $priceIncludingTax;
}


//Prix après remise
function calculateDiscount($priceIncludingTax, $percentage){
    $priceIncludingDiscount = $priceIncludingTax - ($percentage*$priceIncludingTax/100);
    return $priceIncludingDiscount;
}

echo "Montant TVA = " .calculateVat(100, 20) ."€";
echo "<br>Prix TTC = " .calculateIncludingTax(100, 20)."€";
echo "<br>Prix avec remise = " .calculateDiscount (120, 10)."€";
echo "<br>Remise = " .calculateIncludingTax(100,20) - calculateDiscount (120, 10)."€"; 
?>