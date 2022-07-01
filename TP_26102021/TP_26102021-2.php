<?php
// demande d'une saisie à l'utilisateur et attribution dans la variale $c
echo "saisir une lettre, une symbole ... \n";
$c = trim(fgets(STDIN));

// demande d'une saisie à l'utilisateur et attribution dans la variable $n
echo "saisir un nombre ... \n";
$n = trim(fgets(STDIN));

// on initialise le compteur
$compteur = 0;

// affichage d'un carré avec $c comme motif et $n de côté
while ($compteur <= $n) {
    echo "$c\n";
    $compteur = $compteur + 1;
}
?>