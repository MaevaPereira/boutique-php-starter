<?php
$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$message = $_POST["message"] ?? "";

// Vérifier que ce n'est pas vide (Tous les champs requis)
if(empty($name && $email && $message)){
    $error = "Les champs sont requis ";
    echo $error;
}
else{
    echo "name: " .htmlspecialchars($name). " mail: ".htmlspecialchars($email). " msg: ".htmlspecialchars($message);
}

// Vérifier le format (Email valide)
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<br>mail: " .htmlspecialchars($email);
}
else{
    $error = "<br>Email invalide ";
    echo $error;
}   

//Message minimum 10 caractères
if (strlen($message) <= 10) {
    $error = "<br>charactères inférieur à 10";
    echo $error;
}
else{
    echo "<br>msg :" .htmlspecialchars($message);
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
    
<form method="POST">
    
    <?= 'Name : '?> 
    <input type="text" name="name" >

    <?='Email : '?>
    <input type="text" name="email" >
   
    <?= 'Message: '?>
    <input type="message" name="message" >
    <button type="submit">Envoyer</button>

</form>

</body>
</html>

