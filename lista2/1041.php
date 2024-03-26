<?php
list($x,$y) = explode(' ', readline());
if ($x > 0 && $y > 0) 
{
    echo "Q1\n";
}
else if ($x < 0 && $y > 0)
{
    echo "Q2\n";
}
else if ($x < 0 && $y < 0 )
{
    echo "Q3\n";
} 
else if ($x > 0 && $y < 0)
{
    echo "Q4\n";
}
else if ($x == 0 & $y == 0)
{
    echo "Origem\n";
}
else if ($y == 0 && $x > 0 or $x < 0)
{
    echo "Eixo X\n";
}
else if ($x == 0 && $y > 0 or $y < 0)
{
    echo "Eixo Y\n";
}
?>