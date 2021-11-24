<?php
/*
commentaire sur plusieurs lignes
28-09-2021
calcul de l'age en fonction de la date de naissance de l'utilisateur
*/
// c pas une constante $ANNEE = 2021;

echo "Saisir votre prénom ...\n";
$prenom = trim(fgets(STDIN));

echo "bonjour $prenom, veuillez saisir votre date de naissance ...";
$date_naissance = trim(fgets(STDIN));

$age = $ANNEE - $date_naissance
echo "$prenom a $age ans."
?>