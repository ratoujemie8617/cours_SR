<?php
// Initialisatisation de la variable $tab_questions avec un tableau vide
$tab_questions = [];

// Déclaration de la variable $n_quest avec initialisation à -1
$n_quest = -1;

// tant que la variable $n_quest n'est pas supérieure ou égale à 1, demander la saisie d'un nombre de questions à l'utilisateur puis stocker la saisie dans la variable
while ($n_quest <= 1) {
    echo "saisir une question ...\n";
    $n_quest = trim(fgets(STDIN));
}

// demander la saisie d'une question à l'utilisateur puis stocker la réponse dans la variable $rep avec une occurence ayant pour valeur $n_quest
do {
    echo "Saisir une question ...\n";
    $saisie = trim(fgets(STDIN));
    array_push($tab_questions, $saisie);
} while ($n_quest <= 1);

// afficher toutes les questions
function afficher_tableau($tab_questions) {
    foreach ($tab_questions as $valeur => $tab_questions[]) {
        if (is_array($valeur)) {
            afficher_tableau($valeur);
        }
        else {
            echo "$valeur.<br />";
        }
    }
}

// déclaration de la variable $rep et initialisation à -1
$rep = -1;

// Tant que $rep n'est pas un indice de question, on demande un nombre et on stocke la valeur saisie dans $rep
while ($rep != $tab_questions[rand(0, 4)]) {
    echo "Saisir un nombre...\n";
    $rep = trim(fgets(STDIN));
}
?>