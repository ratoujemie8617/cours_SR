<?php
// demande une saisie à l'utilisateur puis stockage dans la variable $question
echo "saisir une question...\n";
$question = trim(fgets(STDIN));

// Déclaration de la variable $tab_réponses, initialisée avec la valeur de tableau vide
$tab_reponses = [];

// Demande de la saisie d'un nombre de réponses à l'utilisateur puis stockage dans la variable $n_rep
echo "saisir un nombre de réponses...\n";
$n_reponses = trim(fgets(STDIN));

// on initialise le compteur pour la boucle suivante
$compteur = 0;

// demander la saisie d'une réponse et l'ajouter ensuite à $tab_reponses
while ($compteur <= $n_reponses) {
    echo "saisir une réponse...";
    $saisie = trim(fgets(STDIN));
    array_push($tab_reponses, $saisie);
}

// Déclaration de la variable $bon_rep et intialisation à -1
$bon_rep = -1;

// afficher la question saisie parl'utilisateur
echo "La question saisie est $question\n";

// afficher les différentes réponses
echo "les réponses saisies sont $tab_reponses\n";

// tant que la valeur saisie n'est pas pas dans la plage d'indices, on demande une saisie à l'utilisateur et on stocke la réponse dans $saisie
while ($bon_rep != $tab_reponses[rand(0, 2)]) {
    echo "Saisir une question...\n";
    $bon_rep = trim(fgets(STDIN));
    echo "Ce n'est pas dans la plage d'indices !\n";
}

// déclaration de la variable $rep, initialisée à -1
$rep = -1;

// Tant que la variable $rep n'est pas un indice on demande une saisie à l'utilisateur, on stocke ensuite dans $rep et si ce n'est pas dans la plage d'indices
while ($rep != $tab_reponses[rand(0, 2)]) {
    echo "Saisir une question...\n";
    $rep = trim(fgets(STDIN));
    echo "Ce n'est pas dans la plage d'indices !\n";
}

// si l'utilisateur trouve la bonne réponse on affiche "gagné!", sinon on affiche "perdu!"
if ($saisie == $tab_reponses) {
    echo "Gagné!\n";
}
else {
    echo "Perdu!\n";
}
?>