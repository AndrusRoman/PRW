<?php
list($a, $b) = explode(' ', readline());
$ma = max($a, $b);
$mi = min($a, $b);
if($ma % $mi == 0)
{
 echo "Sao Multiplos\n";
}
else 
{
 echo "Nao sao Multiplos\n";
}
?>