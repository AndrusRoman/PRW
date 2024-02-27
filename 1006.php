<?php
$a = floatval(number_format(readline(),1 ));
$b = floatval(number_format(readline(),1 ));
$c = floatval(number_format(readline(),1 ));
    
$MEDIA = (($a * 2) + ($b * 3) + ($c * 5)) / 10;
echo "MEDIA = " . number_format($MEDIA, 1) . "\n";
?>