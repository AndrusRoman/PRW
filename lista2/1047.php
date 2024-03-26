<?php
list($a, $b, $c, $d) = explode(' ', readline());

if($a == $c and $b == $d){
    echo "O JOGO DUROU 24 HORA(S) E 0 MINUTO(S)\n";
}
elseif($a < $c and $b < $d){
  $H = $c -$a; 
  $M = $d - $b;
  echo "O JOGO DUROU $H HORA(S) E $M MINUTO(S)\n";
}
elseif($a < $c and $b == $d){
  $H = $c -$a; 
  echo "O JOGO DUROU $H HORA(S) E 0 MINUTO(S)\n";
}
elseif($a < $c and $b > $d){
  $H = ($c -$a) - 1; 
  $M = 60- ($b -$d);
  echo "O JOGO DUROU $H HORA(S) E $M MINUTO(S)\n";
}
elseif($a > $c and $b> $d){
  $H = (24-$a +$c) - 1;
  $M = 60- ($b -$d);
  echo "O JOGO DUROU $H HORA(S) E $M MINUTO(S)\n";
}
elseif($a > $c and $b == $d){
  $H = (24-$a +$c);
  echo "O JOGO DUROU $H HORA(S) E 0 MINUTO(S)\n";
}
elseif($a > $c and $b < $d){
  $H = (24-$a +$c);
  $M = $d - $b;
  echo "O JOGO DUROU $H HORA(S) E $M MINUTO(S)\n";
}
elseif($a == $c and $b < $d){
  $M = $d - $b;
  echo "O JOGO DUROU 0 HORA(S) E $M MINUTO(S)\n";
}
elseif($a == $c and $b > $d){
  $M = 60- ($b -$d);
  echo "O JOGO DUROU 23 HORA(S) E $M MINUTO(S)\n";
}
?>