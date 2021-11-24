<?php
$num1 = 43;
$num2 = 102;
$num3 = 54;
$num4 = 4687;
$num5 = 410;
$num6 = 21;

$saisie1 = false;
$saisie2 = false;
$saisie3 = false;
$saisie4 = false;
$saisie5 = false;
$saisie6 = false;

$compteur = 0;
$gagne = true;
while ($compteur < 6) {
    echo "saisir un nombre";
    $nombre = trim(fgets(STDIN));
    if ($nombre == $num1) {
        if ($saisie1) {
            $gagne = false;
        }
        else {
            $gagne = true;
        }
    }
    else if ($nombre == $num2) {
        if ($saisie2) {
            $gagne = false;
        }
        else {
            $gagne = true;
        }
    }
    else if ($nombre == $num3) {
        if ($saisie3) {
            $gagne = false;
        }
        else {
            $gagne = true;
        }
    }
    else if ($nombre == $num4) {
        if ($saisie4) {
            $gagne = false;
        }
        else {
            $gagne = true;
        }
    }
    else if ($nombre == $num5) {
        if ($saisie5) {
            $gagne = false;
        }
        else {
            $gagne = true;
        }
    }
    else if ($nombre == $num6) {
        if ($saisie6) {
            $gagne = false;
        }
        else {
            $gagne = true;
        }
    }
    $compteur = $compteur + 1;
}
?>