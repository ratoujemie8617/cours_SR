<?php
// Déclaration de la variable $tab_bin, initialisée à liste vide
$tab_bin = [];

// Tant que la boucle infinie n'est pas interrompue, on affiche le menu et on stocke la valeur dans $saisie. Si $saisie vaut 0 ou 1, on ajoute la valeur de $saisie à $tab_bin et si $saisie vaut 2, on interrompt la boucle
function menu() {
    echo "0 : 0\n";
    echo "1 : 1\n";
    echo "2 : quitter\n";
}
while (true) {
    menu();
    $saisie = trim(fgets(STDIN));
    if ($saisie == 0 OR $saisie == 1) {
        array_push($tab_bin, $saisie);
    }
    elseif ($saisie == 2) {
        break;
    }
}

// Si $tab_bin n'est pas nul, on affecte 0 à $d, sinon on affecte 1 à $d. On initialise $n à 1 et tant que $n est strictement inférieur à la taille de $tab_bin, $k vaut $n, $p vaut 2. Tant que $k est strictement supérieur à 1, on multiplie $p par 2 et on soustrait 1 à la valeur de $k.
if ($tab_bin != is_null($tab_bin)) {
    if ($tab_bin[0] == 0) {
        $d = 0;
    }
    else {
        $d = 1;
    }
    $n = 1;
    while ($n < sizeof($tab_bin)) {
        $k = $n;
        $p = 2;
        while ($k > 1) {
            $p = $p*2;
            $k = $k - 1;
        }
        $d = $d + $p;
    }
}

// on affiche $tab_bin et $d
echo "$tab_bin";
echo "$d";
?>