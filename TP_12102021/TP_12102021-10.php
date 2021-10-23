<?php
echo "saisir un nombre x...\n";
$x = trim(fgets(STDIN));

echo "saisir un nombre y...\n";
$y = trim(fgets(STDIN));

echo "saisir un nombre z...\n";
$z = trim(fgets(STDIN));

while ($z>=$x && $z<=$y) {
    echo "$z est dans l'intervalle [$x,$y]\n";
}

while ($z<$x) {
    echo "$z n'est dans pas dans l'intervalle [$x,$y]\n"
}

while ($z>$y) {
    echo "$z n'est dans pas dans l'intervalle [$x,$y]\n"
}
?>