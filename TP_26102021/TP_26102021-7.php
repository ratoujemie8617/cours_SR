<?php
// demande de saisie à l'utilisateur et attribution dans la variable $c
echo "saisir un caractère ...";
$c = trim(fgets(STDIN));

// initialisation de la variable compteur
$saisie = "";

// initialisation du compteur
$compteur = 0;

// tant que $saisie n'est pas égal à $c, demander la saisie d'un nouveau caractère et ajouter 1 au compteur
while ($saisie != $c) {
    echo "saisir un second caractère ...";
    $saisie = trim(fgets(STDIN));
    $compteur = $compteur + 1;
}

echo "Vous avez eu $compteur essais";
?>