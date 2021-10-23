<?php
echo "saisir un nombre n ...\n";
$n = trim (fgets(STDIN));

if ($n%2 == 1) {
    echo "le nombre est impair\n";
}
else {
    echo "le nombre est pair\n";
}
?>