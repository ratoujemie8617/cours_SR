<?php
// on importe le fichier "constante42.php"
require("constante42.php");

if (constante42() == 42) {
    echo "[OK] Test 0 - fonction constante42 : constante42 retourne bien 42";
}
else {
    echo "[KO] Test 0 - fonction constante42 : constante42 ne retourne pas 42";
}
?>