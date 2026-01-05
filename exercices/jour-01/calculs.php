<?php

    $priceExcludingTax = 100;
    $vat = 0.20;  //(20 en pourcentage);
    $quantity = 3;
    $prixTTC = $priceExcludingTax * (1+$vat);
    echo "TVA = " .$priceExcludingTax * $vat; //"Montant de la TVA" ?>
    <br/>
    <?php
    echo "Prix TTC unitaire = " .$prixTTC ; //Le prix TTC U (Prix HT +TVA) => 100  * (1+0.20) ?>
    <br/>
    <?php
    echo "Total pour qté demandé = " .$prixTTC * $quantity;  //Le total pour la quantité commandée ( Prix TTC * Qté)

?>