<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
        "dev",
        "dev",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    echo "✅ Connexion réussie !";
} catch (PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage();
}

$search = $_GET["search"] ?? "";
$products= [];

if($search !== ""){
    $stmt = $pdo->prepare("SELECT * FROM products WHERE name LIKE ?");
    $stmt->execute(['%' . $search . '%']);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php foreach($products as $product):?>
<p> <br> <?= $product ["name"]?></p>
<?php endforeach; ?>

<form method="GET" >

        <label>search </label>
        <input type="text" name="search" >
        <button type="submit">Search</button>

    </form>



    


</body>
</html>