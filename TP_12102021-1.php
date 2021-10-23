<?php
echo "saisir une valeur";
$n = trim(fgets(STDIN));

$boucle = 0;
while ($boucle < $n)
{
    echo "la valeur actuelle est : $boucle \n";
    $boucle = $boucle + 1;
}
?>
