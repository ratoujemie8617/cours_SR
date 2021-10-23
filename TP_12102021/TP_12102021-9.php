<?php
echo "saisir un nombre x ...\n";
$x = trim(fgets(STDIN));

echo "saisir un nombre y ...\n";
$y = trim(fgets(STDIN));

if ($x%$y == 0) {
    echo "le nombre est divisible\n";
}
else {
    echo "le nombre n'est pas divisible\n";
}
?>