<?php
// demande d'une saisie à l'utilisateur et attribution dans la variable $c
echo "saisir une lettre, un symbole ... \n";
$c = trim(fgets(STDIN));

// demande d'une saisie à l'utilisateur et attribution dans la variable $long
echo "saisir un nombre ... \n";
$long = trim(fgets(STDIN));

// demande d'une saisie à l'utilisateur et attribution dans la variable $large
echo "saisir un second nombre \n";
$large = trim(fgets(STDIN));

// on initialise le compteur
$compteur = 0;

while ($compteur <= $long*$large) {
    echo "$c \n";
    $compteur = compteur + 1;
}
?>