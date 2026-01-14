<?php
session_start();

//reset
if(isset ($_GET["reset"])){
  $_SESSION['visits']=0;
}

//compteur de visite
if (!isset($_SESSION['visits'])) {
  $_SESSION['visits'] = 1;
} else {
  $_SESSION['visits']++;
 
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
    
  <p>Vous avez visité cette page <?=$_SESSION["visits"]?> fois</p>
  <a href= "compteur.php">Refresh</a>

  <a href= "compteur.php?reset=0">Reset</a>

</body>
</html>