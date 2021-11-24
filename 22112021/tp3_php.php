<?php
// étape 1

$affichage = 0;
echo "saisir un nombre";
$n  = trim(fgets(STDIN));

while (!($affichage < $n))
{
    echo "le nombre actuel est : $affichage \n";
    $affichage = $affichage + 1;
}