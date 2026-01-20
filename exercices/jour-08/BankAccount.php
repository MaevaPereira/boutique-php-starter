<?php

class BankAccount{

     function __construct(private $balance){
        $this->balance = $balance;
    }
    
    // Getter : lire la valeur
    public function getBalance(){
        return $this->balance;
    }

    //deposit
    public function deposit($amount){
        $this->balance += $amount;
    }

    //withdraw => vérifier que le balance est suffisant
    public function withdraw($amount){
        if($amount > 0 && $amount <= $this->balance){   
            $this->balance -= $amount;
        }
       else{ 
        echo "Aucun montant négatif autorisé";
       }
    }
}

$account = new BankAccount(0);
$account-> deposit(20);
$account-> withdraw(100);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>Account: <?= $account-> getBalance() ?> €</p>

</body>
</html>