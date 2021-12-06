<?php
require("incr1.php");

echo "saisir un nombre...";
$saisie = trim(fgets(STDIN));
if (incr1($saisie) == $x) {
    echo "[OK] Test 2 - fonction incr1, parametre(s) $saisie : incr1 retourne bien $x";
}
else {
    echo "[KO] Test 2 - fonction incr1, parametre(s) $saisie : incr1 ne retourne pas $x";
}
?>