<?php
echo "saisir une valeur n ...";
$n = trim(fgets(STDIN));

$boucle = 0;
while($n > $boucle)
{
    echo "la valeur actuelle est : $n \n";
    $n = $n - 2;
}
?>