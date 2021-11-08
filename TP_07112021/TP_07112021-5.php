<?php
// Initialisation de la variable $tab_chemin avec le caractère "*"
$tab_chemin = ["*"];

// déclaration de la variable $choix, initialisée à -1
$choix = -1;

// tant que la variable $choix ne vaut pas 4 et tant que $choix n'est pas dans l'intervalle [1, 3], on demande si le joueur veut aller à droite, en bas ou si c'est fini
while ($choix != 4) {
    while ($choix != [1, 3]) {
        echo "Où voulez-vous aller : 1-à droite, 2-en bas, 3-C'est fini?\n";
        $choix = trim(fgets(STDIN));
    }
}

// si $choix vaut 1, on ajoute "_" à $tab_chemin
if ($choix == 1) {
    array_push($tab_chemin, "_");
}

// si $hoix vaut 2, on stocke la longueur du dernier élément dans la variable $long
if ($choix == 2) {
    $long = strlen(end($tab_chemin));

    // déclaration de la variable $elem, initialisée à "\n"
    $elem = "\n";

    // faire $long fois : concaténer un espace à $elem et concaténer | à elem
    do {
    $espace = " ".$elem;
    $autre = "|".$elem;
    } while ($long);
}
?>