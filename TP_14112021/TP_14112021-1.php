<?php
// déclaration de la variable $n, initialisée à -1
$n = -1.0;

// Tant que $n n'est pas nombre entier naturel, on demande la saisie d'un nombre entier naturel à l'utilisateur puis on stocke la valeur saisie dans $n
while ($n != is_int($n)) {
    echo "Saisir un nombre entier naturel...\n";
    $n = trim(fgets(STDIN));
}

// Déclaration de la variable $tab_bin, initialisée avec la valeur de liste vide
$tab_bin = [];

//Déclaration de la variable $d, initialisée avec la valeur de $n
$d = $n;

// Déclaration de la variable $r, initialisée à -1
$r = -1;

// Tant que la boucle infinie n'est pas interrompue, on affecte à $r le reste de la divison de $d par 2, on ajoute la valeur de $r à $tab_bin, on affecte à $d le quotient de la division de $d par 2 et si $d vaut 0, on interrompt la boucle. Si $d vaut 1, on ajoute la valeur de 1 à $tab_bin
while (true) {
    $r = $d % 2;
    array_push($tab_bin, $r);
    $d = $d / 2;
    if ($d == 0) {
        break;
    }
    if ($d == 1) {
        array_push($tab_bin, 1);
        break;
    }
    echo "$tab_bin";
}
?>