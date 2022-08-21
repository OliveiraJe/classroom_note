<?php
$dbHost = 'Localhost';
$dbUsername = 'jefferson';
$dbPassoword = '36122448Jj$$';
$dbName = 'classroom_note';

$conexao = mysqli_connect($dbHost,$dbUsername,$dbPassoword,$dbName);

// Teste de Conexão
/*
if($conexao->connect_errno){
    echo"erro";
}else{
    echo"sucesso";
}
---------------------------------------------
if(!$conexao){
    die("erro: " .mysqli_connect_error());
}
*/
?>