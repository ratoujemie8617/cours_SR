<?php
require("identite.php");

echo "saisir un nombre...";
$x = trim(fgets(STDIN));
if (identite($x) == $x) {
    echo "[OK] Test 1 - fonction identite, parametre(s) $x : identite retourne bien $x";
}
else {
    echo "[KO] Test 1 - fonction identite, parametre(s) $x : identite ne retourne pas $x";
}
?>