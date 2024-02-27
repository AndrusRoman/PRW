<?php
$nome = $_GET['nome'];
$email = $_GET['idade'];
$salario = $_GET['salario'];
if($salario <= 1412)
 {
    $desconto = $salario * 0.075;
    echo "Desconto INSS = ".number_format($desconto,2,".","");
 }
 else if($salario >= 1412.01 && $salario <= 2666.68)
 {
    $desconto = $salario * 0.09;
    echo "Desconto INSS = ".number_format($desconto,2,".","");
 }
 else if($salario >= 2666.69 && $salario <= 4000.03)
 {
    $desconto = $salario * (12)/100;
    echo "Desconto INSS = ".number_format($desconto,2,".","");
 }
 else if($salario >= 4000.04 && $salario <= 7786.02)
 {
    $desconto = $salario * (14)/100;
    echo "Desconto INSS = ".number_format($desconto,2,".","");
}
?>