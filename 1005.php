<?php
$a = floatval(number_format(readline(),1 ));
$b = floatval(number_format(readline(),1 ));
$MEDIA = (($a * 3.5) + ($b * 7.5)) / 11;
echo "MEDIA = " . number_format($MEDIA, 5) . "\n";
?>