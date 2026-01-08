<?php

//Switch
 $status = "standby";


switch ($status) {
    case "standby":
        break;   
}


//Match
$status = 'delivered';

$return_status = match($status) {
    "standby" => "order in standby",
    "validated" => "order validated",
    "shipped" => "order shipped",
    "delivered" => "order delivered",
    "canceled" => "order canceled",
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <p> <span style="color: red"><?= $return_status ?> </span></p>
 
</body>
</html>

