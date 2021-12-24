<?php
// demande d'une saisie à l'utilisateur puis stockage de la valeur dans la variable $c
echo "Saisir un caractère ...\n";
$c = trim(fgets(STDIN));

// demande d'une saisie à l'utilisateur puis stockage de la valeur dans la variable $cote
echo "Saisir un nombre ...\n";
$cote = trim(fgets(STDIN));

// Initialisation d'une variable $compteur pour la boucle for
$compteur = 0;

// On réalise une boucle for pour afficher $c par $cote entre $compteur et $cote 
for ($compteur = 0; $cote; $compteur++) { 
    echo $c*$haut;
}
?>