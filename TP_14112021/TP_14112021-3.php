<?php
// Déclaration de la variable $tab, initialisée à liste vide
$tab = [];

// Création d'une fonction pour afficher le menu
function menu() {
    echo "1. Ajouter un entier\n";
    echo "2. Afficher la liste des entiers\n";
    echo "3. Supprimer le dernier entier de la liste\n";
    echo "4. Supprimer le premier entier de la liste\n";
    echo "5. Supprimer le premier entier ayant une valeur donnée\n";
    echo "6. Supprimer tous les entiers ayant une valeur donnée\n";
    echo "7. Afficher la dernière note tapée\n";
    echo "8.  Tester si les valeurs sont dans un ordre croissant\n";
    echo "9. Tester si les valeurs sont dans un ordre décroissant\n";
    echo "10. Quitter\n";
}

// Tant que la boucle infinie n'est pas interrompue, on affiche le menu, on stocke la valeur dans $saisie. Si $saisie vaut 1, alors on demande la saisie d'un entier
while (true) {
    menu();
    $saisie = trim(fgets(STDIN));
    switch ($saisie) {
        case '1':
            echo "saisir un entier\n";
            array_push($tab, trim(fgets(STDIN)));
        case '2':
            echo $tab;
        case '3':
            array_pop($tab);
        case '4':
            unset($tab[0]);
        case '5':
            echo "Saisir un nombre\n";
            $var = array_push($tab, trim(fgets(STDIN)));
        case '6':
            echo "saisir un nombre\n";
            $var1 = array_push($tab, trim(fgets(STDIN)));
        case '7':
            echo end($tab);
        case '8':
            var_dump($tab);
        case '9':
            var_dump($tab);
        case '10':
            break;
    }
}
?>