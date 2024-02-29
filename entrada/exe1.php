<?php
$nome = $_GET['nome'];
$idade = $_GET['idade'];
$salario = $_GET['salario'];
$INSS = 0;
$IFPR = 0;
if($salario <= 1412)
 {
    $INSS = $salario * 0.075;
    echo "Desconto INSS = ".number_format($INSS,2,".","")."\n";
 }
 else if($salario >= 1412.01 && $salario <= 2666.68)
 {
    $INSS = $salario * 0.09;
    echo "Desconto INSS = ".number_format($INSS,2,".","")."\n";
 }
 else if($salario >= 2666.69 && $salario <= 4000.03)
 {
    $INSS = $salario * 0.12;
    echo "Desconto INSS = ".number_format($INSS,2,".","")."\n";
 }
 else if($salario >= 4000.04 && $salario <= 7786.02)
 {
    $INSS = $salario * 0.14;
    echo "Desconto INSS = ".number_format($INSS,2,".","")."\n";
}

if($salario <= 2259.20)
{
   $IFPR = 0;
}
else if($salario >= 2259.21 && $salario <= 2828.65 && $idade < 65)
{
   $IFPR = ($salario - $INSS) * 0.075;
   echo "Desconto IFPR = ".number_format($IFPR,2,".","")."\n";
}
else if($salario >= 2828.66 && $salario <= 3751.06 && $idade < 65)
{
   $IFPR = ($salario - $INSS) * 0.15;
   echo "Desconto IFPR = ".number_format($IFPR,2,".","")."\n";
}
else if($salario >= 3751.07 && $salario <= 4664.68 && $idade < 65)
{
   $IFPR = ($salario - $INSS) * 0.225;
   echo "Desconto IFPR = ".number_format($IFPR,2,".","")."\n";
}
else if($salario > 4664.68 && $idade < 65)
{
   $IFPR = ($salario - $INSS) * 0.275;
   echo "Desconto IFPR = ".number_format($IFPR,2,".","")."\n";
}

?>