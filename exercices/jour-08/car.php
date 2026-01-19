<?php

class Car {
    function __construct(
        public string $brand,
        public string $model,
        public int $year
    ){}

    public function getAge() : int{
        $age = (date ('Y') - $this->year);
        return $age;
    }

    public function display(): void{
        echo $this -> brand .$this -> model, $this-> getAge() ;
    }

}

$auto = new Car("ford ", " mustang ", 1967);
$auto2 = new Car("Mercedes ", " classe A ", 2006);
$auto3 = new Car("Porsches ", " Carrera ", 2020);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

 <p> <?= $auto -> display()?>ans</p>
 <p> <?= $auto2 -> display()?>ans</p>
 <p> <?= $auto3 -> display()?>ans</p>
 



</body>
</html>