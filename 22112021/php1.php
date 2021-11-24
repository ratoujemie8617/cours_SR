<?php
echo "saisir une chaine de caractères...\n";
$chaine = trim(fgets(STDIN));

$compteur = 0;
while ($compteur < strlen($chaine)) {
    $test_de_la_boucle = $chaine[$compteur] == $chaine[strlen($chaine)-1-$compteur];
    $reponse = $reponse && $test_de_la_boucle;
}

if ($reponse) {
    echo "$chaine est un palindrome";
}
else {
    echo "$chaine n'est pas un palindrome";
}
?>