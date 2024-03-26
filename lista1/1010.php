<?php
list($c1, $n1, $v1) = explode(" ", readline());
list($c2, $n2, $v2) = explode(" ", readline());
$v1 = number_format((float)$v1, 2, '.', '');
$v2 = number_format((float)$v2, 2, '.', '');
$vt = ($n1 * $v1) + ($n2 * $v2);
echo "VALOR A PAGAR: R$ " . number_format($vt, 2, '.', '') . "\n";
?>
