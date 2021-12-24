<?php
// On demande à l'utilisateur de saisir un caractère, on stocke la réponse dans $c
echo "saisir un caractère ...\n";
$c = trim(fgets(STDIN));

// on une autre saisie à l'utilisateur, on stocke la réponse dans $saisie
echo "saisir un caractère ...\n";
$saisie = trim(fgets(STDIN));
//Initialisation de la variable $compteur à 0
$compteur = 0;

// Tant que l'utilisateur n'a pas saisi à nouveau le même caratère on lui demande une saisie
while ($saisie != $c) {
    echo "Ce n'est pas la bonne réponse.\n";
    echo "Retenter votre chance ...\n";
    $saisie = trim(fgets(STDIN));
    $compteur = $compteur + 1;
}
?>