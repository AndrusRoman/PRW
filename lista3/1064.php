<?php
$pos = 0;
$media = 0;
for ($i = 0; $i < 6; $i++) {
    $valAtual = floatval(readline());
    if ($valAtual >= 0) {
        $pos++;
        $media += $valAtual;
    }
}
$media = $media / $pos;
echo "$pos valores positivos\n";
echo number_format($media, 1, ".", "") . "\n";