<?php
// déclaration de la variable $valvar1 initialisée à -1
$valvar1 = -1;

// Tant que $valvar1 ne vaut pas 0 ou 1, on demande à l'utilisateur si la variable booléenne est vraie ou fausse, puis on stocke la valeur saisie dans la variable $valvar1
while ($valvar1 != 0 && $valvar1 != 1) {
    echo "La variable booléenne est-elle vraie ou fausse ?";
    $valvar1 = trim(fgets(STDIN));
}

// déclaration de la variable $var1, initialisée à false
$var1 = false;

// Si la variable $valvar1 vaut 1, on affecte true à la variable $var1
if ($valvar1 == 1) {
    $var1 = true;
}

// Déclaration de la variable $valvar2, initialisée à -1
$valvar2 = -1;

// Tant que $valvar2 ne vaut pas 0 ou 1, on demande à l'utilisateur si la variable booléenne est vraie ou fausse, puis on stocke la valeur saisie dans la variable $valvar2
while ($valvar2 != 0 && $valvar2 != 1) {
    echo "La variable booléenne est-elle vraie ou fausse ?";
    $valvar2 = trim(fgets(STDIN));
}

// déclaration de la variable $var2, initialisée à false
$var1 = false;

// Si la variable $valvar2 vaut 1, on affecte true à la variable $var2
if ($valvar1 == 1) {
    $var1 = true;
}

// déclaration de la variable $valrep, initialisée à -1
$valrep = -1;

// déclaration de la variable $rep, intialisée à false
$rep = false;

// Si $valrep vaut 1, on affecte true à la variable rep
if ($valrep == 1) {
    $rep = true;
}

// Si la variable $rep a la même valeur que la conjonction de non $var et de $var2, on affiche gagné
if ($rep == !$var1 OR $var2) {
    echo "Gagné !\n";
}
else {
    echo "Perdu !"
}
?>