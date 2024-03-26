<?php
    $nf = intval(readline());
    $ht = intval(readline());
    $sf = floatval(number_format(readline(), 2));
    
    $s = $ht * $sf;
    echo "NUMBER = " . $nf . "\n" . "SALARY = U$ " . number_format($s, 2, '.', '') . "\n";
?>
