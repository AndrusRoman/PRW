<?php
list($cod,$quant) = explode(' ', readline());

switch ($cod) {
    case '1':
        $t = 4 * $quant;
        echo "Total: R$ ".number_format($t,2,".",'')."\n";
        break;

    case '2':
        $t = 4.5 * $quant;
        echo "Total: R$ ".number_format($t,2,".",'')."\n";
        break;

    case '3':
        $t = 5 * $quant;
        echo "Total: R$ ".number_format($t,2,".",'')."\n";
        break;

    case '4':
        $t = 2 * $quant;
        echo "Total: R$ ".number_format($t,2,".",'')."\n";
        break;

    case '5':
        $t = 1.5 * $quant;
        echo "Total: R$ ".number_format($t,2,".",'')."\n";
        break;
}
?>