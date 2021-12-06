<?php
require("incrK.php");
$x = 102;
$k = 704;
if (incrK($x, $k) == $x+$k) {
    echo "[OK] Test 3 - fonction incrK, parametre(s) $x, $k : incrK retourne bien $ret";
}
else {
    echo "[OK] Test 3 - fonction incrK, parametre(s) $x, $k : incrK ne retourne pas $ret";
}
?>