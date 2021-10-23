<?php
// demande d'une saisie à l'utilisateur et attribution dans la variable $c
echo "saisir un mot ..."
$c = trim(fgets(STDIN));

// on choisit un nombre au hasard, compris entre 1 et 1000
$compteur = mt_rand(1, 1000);

// on inverse l'ordre des caractères de la chaine $c
$compteur = strlen($chaine) - 1;
while ($compteur >= 0)
{
    echo "$chaine[$compteur]";
    $compteur = $compteur - 1;
}
?>