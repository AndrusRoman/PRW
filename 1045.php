<?php
$n = explode(" ", readline());

for($i = 0 ; $i < 3; $i++)
{
    $n[$i] = (float) $n[$i];
}
rsort($n);

$a = $n[0];
$b = $n[1];
$c = $n[2];

if($a >= ($b + $c))
{
  echo "NAO FORMA TRIANGULO\n";
}
else if($a*$a == ($b*$b + $c*$c))
{
  echo "TRIANGULO RETANGULO\n";
}
else if($a*$a > ($b*$b + $c*$c))
{
  echo "TRIANGULO OBTUSANGULO\n";
}
else if($a*$a < ($b*$b + $c*$c))
{
  echo "TRIANGULO ACUTANGULO\n";
}
if($a == $b && $b == $c)
{
  echo "TRIANGULO EQUILATERO\n";
}
else if($a == $b || $b == $c || $a == $c)
{
  echo "TRIANGULO ISOSCELES\n";
}
?>