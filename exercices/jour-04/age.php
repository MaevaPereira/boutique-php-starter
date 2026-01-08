<?php

$age = 21;

if ($age <18){
    echo "Minor";
}
elseif ($age>17 && $age <26){
    echo "Young adult";
}
elseif ($age >=26 && $age <=64 ){
    echo "Adult";
} 
else {
    echo "Senior";
}

?>