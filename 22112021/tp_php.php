<?php
// Exo 2
// echange de 2 variables
$a = "trois";
$b = 3;

echo "$a, $b"

$d = $a;
$a = $b;
$b = $d

echo "$a, $b"

// Exo 3
date_default_timezone_set('Europe/Paris');
echo "saisissez votre prenom ..."
$prenom = trim(fgets(STDIN));
echo "saisissez votre nom ..."
$nom = trim(fgets(STDIN));
