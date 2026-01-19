<?php

class Product
{

    function __construct(
        public int $id,
        public string $nom,
        public string $description,
        public int  $prix,
        public int $stock,
        public string $categorie
    ) {}

    //Prix TTC
    public function getPriceIncludingTax(float $vat = 20)
    {
        $this->prix = $this->prix * (1 + $vat / 100);
        return $this->prix;
    }

    //Stock
    public function isInStock()
    {
        if ($this->stock > 0) {
            return "true";
        } else {
            return "false";
        }
    }

    //min stock
    public function reduceStock(int $quantity)
    {
        if ($quantity < 100);
        return "article limité";
    }

    //Discount

    public function applyDiscount(float $percentage)
    {

        $priceIncludingDiscount = $this->prix - ($percentage * $this->prix / 100);
        return $priceIncludingDiscount;
    }

    public function display(): void
    {
        echo $this->nom . $this->description, $this->categorie;
    }
}
$product1 = new Product(1, "Nintendo Switch, ", "console de jeu vidéo familiale et fun ", 300, 1, "(console)");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Produit: <?= $product1->display() ?> </p>
    <p>Prix TTC: <?= $product1->getPriceIncludingTax() ?> € </p>
    <p>En stock: <?= $product1->isInStock() ?> </p>
    <p><?= $product1->reduceStock(5) ?> </p>
    <p> Prix avec réduction: <?= $product1->applyDiscount(5) ?> €</p>


</body>

</html>