<?php
session_start(); 

$username = $_POST["username"]?? "";
$password = $_POST["password"]?? "";

// ID
if ($username === "admin" && $password === "1234"){
    $_SESSION["user"] = "admin";
    header("Location: dashboard.php");
    exit();
}
else{
    $error = "Identifiants incorrects";
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

 <p> <?=$error?> </p>
    
<form method="POST" >
    
    <label for="username">Username </label>
    <input type="text" name="username" >

    <label for="password">Password </label>
    <input type="password" name="password">

    <button type="submit">Envoyer</button>

</form>

</body>
</html>


