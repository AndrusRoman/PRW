<?php
list ($n1,$n2,$n3,$n4) = explode(' ',readline());

$m = ($n1*0.2 + $n2*0.3 + $n3*0.4 + $n4*0.1);
if($m >= 7.0)
{
    echo "Media: ".number_format($m,1,".",'')."\n";
    echo "Aluno aprovado.\n";
}
else if($m < 5.0)
{
    $m *= 10;
    $m = floor($m);
    $m /= 10;
    echo "Media: ".number_format($m,1,".",'')."\n";
    echo "Aluno reprovado.\n";

}
else if ($m >= 5.0 && $m <= 6.9)
{
    echo "Media: ".number_format($m,1,".",'')."\n";
    echo "Aluno em exame.\n";

    $ne = floatval(readline());
    $M = ($ne + $m)/2;
    echo "Nota do exame: ".number_format($ne,1,".",'')."\n";
    if($M >= 5.0)
    {
        echo "Aluno aprovado.\n";
        echo "Media final: ".number_format($M,1,".",'')."\n";
    }
    else
    {
        echo "Aluno reprovado.\n";
        echo "Media final: ".number_format($M,1,".",'')."\n";
    }
}
?>