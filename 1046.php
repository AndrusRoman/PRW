<?php
list($a, $b) = explode(' ', readline());

if($a == $b)
{
  echo "O JOGO DUROU 24 HORA(S)\n";
}
elseif ($a > $b)
{
  echo "O JOGO DUROU ".(24 - ($a - $b))." HORA(S)\n";
}
else if ($a < $b)
{
  echo "O JOGO DUROU ".abs($b - $a)." HORA(S)\n";
}
?>
