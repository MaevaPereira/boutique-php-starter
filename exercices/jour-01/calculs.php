<?php

    $priceExcludingTax = 100;
    $vat = 0.20;  //(20 en pourcentage);
    $quantity = 3;
   
    echo "TVA =" .$priceExcludingTax * $vat; //"Montant de la TVA"
    echo "Prix TTC unitaire =" .$priceExcludingTax * (1+$vat) == $prixTTC ; //Le prix TTC unitaire (Prix HT +TVA) 100  * (1+0.20)
    echo "Total pour qté demandé =" .$prixTTC * $quantity;  //Le total pour la quantité commandée ( Prix TTC * Qté)

?>