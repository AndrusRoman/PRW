<?php
$nome = $_GET['nome'];
$email = $_GET['email'];
$campo_senha = $_GET['campo_senha'];
$senha = 123;

if($campo_senha==$senha)
    echo "logado com sucesso";
else
    {
        echo "senha incorreta";
    }

?>