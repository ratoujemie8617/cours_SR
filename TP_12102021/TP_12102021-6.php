<?php
echo "saisir une valeur x ...";
$x = trim(fgets(STDIN));

echo "saisir une valeur y ...";
$y = trim(fgets(STDIN));

$boucle = $y;
while($boucle >= $x && $boucle <== $y) {
    echo "la valeur actuelle est : $boucle\n";
    $boucle = $boucle - 2;
}
?>