<?php class Category
{
    function __construct(
        public string $id,
        public string $nom,
        public string $description,
    ) {}

    //  nom en minuscules, espaces remplacés par des tirets
    public function getSlug()
    {
        $str = str_replace(' ', '-', $this->nom); // Supprimer les espaces et les remplacer par un tiret
        $str = strtolower($str); //nom en minuscules
        return $str;
    }
}
$console = new Category("360", "MICROSOFT XBOX", "Console de multijoueur");
$console2 = new Category("5", "SONY PS5", "Console de riche");
$console3 = new Category("2", "NINTENDO SWITCH", "Console de famille");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p> <?= $console->getSlug() ?> </p>
    <p> <?= $console2->getSlug() ?> </p>
    <p> <?= $console3->getSlug() ?> </p>

</body>

</html>