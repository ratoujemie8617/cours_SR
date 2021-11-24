<?php
// déclaration d'une fonction
/*
première fonction premfonct
params $x (entier), $y (entier), $z (entier)
return la somme de $x, $y, $z
*/
// $x, $y, $z sont des paramètres symboliques
function nom_fonction($x, $y, $z) {
    $somme = $x + $y + $z;
    return $somme;
}

// application d'une fonction
$a = 42;
$b = 56;
$c = 78;
nom_fonction($a, $b, $c);

$d = trim(fgets(STDIN));
$e = trim(fgets(STDIN));
$f = trim(fgets(STDIN));

nom_fonction($d, $e, $f);
?>