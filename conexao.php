<?php

$hostname = "localhost:3306";
$user = "challenge";
$senha = "193challenge2019";
$database = "challeng_cadastro";
$conexao = mysqli_connect($hostname,$user,$senha,$database);

if(!$conexao){
    print "Não foi possível realizar a conecão com o Banco de Dados";
}


?>
