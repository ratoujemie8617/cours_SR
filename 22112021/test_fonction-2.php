<?php
require("le_plus_petit.php");

// Test 0 de la fonction le_plus_petit
$c = 42;
$d = 68;
$resultat = le_plus_petit($c, $d);
echo "entre $c et $d c'est $resultat le plus petit\n";
if le_plus_petit($c, $d) {
    echo "[KO] $c est plus petit que $d\n";
    echo "[OK] $d est plus grand que $c\n";
}

$e = 523;
$f = 112;
if le_plus_petit2($e, $f) {
    echo "[KO] $e est plus petit que $f\n";
    echo "[OK] $e est plus grand que $f\n";
}
?>