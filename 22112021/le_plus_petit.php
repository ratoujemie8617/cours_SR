<?php
function le_plus_petit($a, $b) {
    if ($a < $b) {
        $min = $a;
    }
    else {
        $min = $b;
    }
    return $min;
}

function le_plus_petit2($a, $b) {
    if ($a < $b) {
        $min = true;
    }
    else {
        $min = false;
    }
    return $min;
}
?>