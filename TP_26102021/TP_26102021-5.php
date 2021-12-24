<?php
// demande d'une saisie à l'utilisateur puis stockage de la valeur dans la variable $c
echo "Saisir un caractère ...\n";
$c = trim(fgets(STDIN));

// demande d'une saisie à l'utilisateur puis stockage de la valeur dans la variable $haut
echo "Saisir un nombre ...\n";
$haut = trim(fgets(STDIN));

// Initialisation d'une variable $compteur pour la boucle for
$compteur = 0;

// On réalise une boucle for pour afficher $c par $haut entre $compteur et $haut
for ($compteur = 0; $haut; $compteur++) { 
    echo $c*$haut;
}
?>