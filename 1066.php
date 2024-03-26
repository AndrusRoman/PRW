<?php
$par = 0;
$impar = 0;
$pos = 0;
$neg = 0;
for ($i = 0; $i < 5; $i++) {
    $valor = floatval(readline());
    if ($valor % 2 == 0)
        $par++;
    else
        $impar++;
    if ($valor > 0)
        $pos++;
    elseif ($valor < 0)
        $neg++;
}
echo "$par valor(es) par(es)\n";
echo "$impar valor(es) impar(es)\n";
echo "$pos valor(es) positivo(s)\n";
echo "$neg valor(es) negativo(s)\n";