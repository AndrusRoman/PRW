<?php
list($a, $b, $c) = explode(' ', readline());
$modulo = $b - $c;
if($modulo < 0)
$modulo = -$modulo;

if($modulo < $a && $a < $b + $c)
{
  $peri = $a + $b + $c;
  echo "Perimetro = ".number_format($peri, 1)."\n";;
}
else
{
  $area = (($a + $b) * $c) / 2;
  echo "Area = ".number_format($area, 1)."\n";
}
?>
