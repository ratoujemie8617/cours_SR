<?php

// demande d'une saisie à l'utilisateur et attribution de la saisie à la variable $c
echo "saisir un symbole ou une lettre ...";
$c = trim(fgets(STDIN));

// demande d'une saisie à l'utilisateur et attribution de la saisie à la variable $n
echo "saisir un nombre ...";
$n = trim(fgets(STDIN));

// initialisation du compteur
$compteur = 0;

// tant que $compteur est inférieur ou égale à $n, afficher $c
while ($compteur <= $n) {
    echo "$c";
}
?>