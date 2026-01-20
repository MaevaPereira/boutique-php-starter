<?php class Product
{

    function __construct(
        public string $nom,
        public string $description,
        public string $categorie,
        public int  $prix,
        public int $stock,
    ) {}


    //Stock
    public function isInStock()
    {
        if ($this->stock > 0) {
            return "true";
        } else {
            return "false";
        }
    }
    // le total du stock 

}
$product = [
    new Product("TV", "65pouces", "éléctronique", 100, 10),
    new Product("PS5", "1To", "jeux-vidéo", 100, 2),
    new Product("Wii", "noire", "jeux-vidéo", 100, 3)
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- TAB -->
    <table>

        <tr>
            <th>nom</th>
            <th>description</th>
            <th>categorie</th>
            <th>prix</th>
            <th>Stock</th>
        </tr>

        <!-- LOOP FOREACH -->
        <?php foreach ($product as $product): {
                $totalStock += $product->stock;
                $totalCatalog += ($product->stock * $product->prix);
            } ?>
            <tr>
                <td><?= $product->nom ?></td>
                <td><?= $product->description ?></td>
                <td><?= $product->categorie ?></td>
                <td><?= $product->prix ?>€</td>
                <td><?= $product->stock ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

    <td>Total Stock: <?= $totalStock ?> produits</td>
    <td> <br> Total catalog: <?= $totalCatalog ?>€</td>
</body>

</html>