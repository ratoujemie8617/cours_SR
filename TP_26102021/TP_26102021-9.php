<?php
// demande d'une saisie à l'utilisateur et attribution dans la variable $c0
echo "saisir un mot ...";
$c0 = trim(fgets(STDIN));

// demande d'une saisie à l'utilisateur et attribution dans la variable $c1
echo "saisir un mot ...";
$c1 = trim(fgets(STDIN));

// mélanger les deux variables $c0 et $c1 et afficher le résultat
echo "$c0.$c1";
?>