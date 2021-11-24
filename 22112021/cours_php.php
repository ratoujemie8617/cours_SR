<?php
/*echo "entrer un chiffre entre 0 et 9 ...";
$saisie = trim(fgets(STDIN));
$nombre = $saisie

if ($nombre < 5)
    {
        echo "le chiffre est compris entre 0 et 4";
    }
else
    {
        echo "le chiffre est compris entre 5 et 9";
    }
*/
echo "saisir un entier \n";
$saisie1 = trim(fgets(STDIN));

echo "choisir un nombre de tours de boucle \n";
$boucle = trim(fgets(STDIN));

echo "choisir une valeur d'incrément \n";
$increment = trim(fgets(STDIN));

$compteur = 0;

while($compteur < $boucle)
{
    echo "la valeur de la saisie est de : $saisie1 \n";
    $saisie1 = $saisie1 + $increment;
    $compteur = $compteur + 1;
}