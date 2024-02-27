<?php
    $n = readline();
    $sf = floatval(readline());
    $v = floatval(readline());
    
    $com = $v * 0.15;
    $total = $sf + $com;
    echo "TOTAL = R$ " . number_format($total, 2, '.', ''). "\n";
?>
