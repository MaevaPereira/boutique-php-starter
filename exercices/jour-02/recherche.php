<?php

    $categories = array("Vêtements", "Chaussures", "Accessoires", "Sport");

//Vérifie si "Chaussures" existe dans le tableau
    if (in_array("Chaussures", $categories))
        {
        echo "Trouvé !";
        }

//Vérifie si "Électronique" existe + affiche "Trouvé !"/"Non trouvé" selon le cas
    if (in_array("Électronique", $categories))
        {
        echo "Trouvé !";
        }
    else
        {
        echo " Non trouvé";
        }


//Utilise array_search() pour trouver l'index de "Sport"
$key = array_search("Sport", $categories);
    print_r($key);
?>