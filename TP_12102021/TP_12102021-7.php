<?php
echo "saisir un nombre n ...\n";
$n = trim (fgets(STDIN));

if ($n%2 == 0) {
    echo "le nombre est pair\n";
}
else {
    echo "le nombre est impair\n";
}
?>