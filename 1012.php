<?php
list($a, $b, $c) = explode(" ", readline());
$areatriagulo = ($a * $c)/ 2;
$volume = 3.14159 * pow($c, 2);
$areatrapezio = (($a + $b) * $c)/ 2.0;
$areaq = $b * $b;
$arear = $a * $b;
echo "TRIANGULO: " . number_format($areatriagulo, 3, '.', '') . "\n" . 
"CIRCULO: " . number_format($volume, 3, '.', '') . "\n" .
"TRAPEZIO: " . number_format($areatrapezio, 3, '.', '') . "\n" .
"QUADRADO: " . number_format($areaq, 3, '.', '') . "\n" .
"RETANGULO: " . number_format($arear, 3, '.', '') . "\n";
?>
