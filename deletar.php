<?php
if(!empty($_GET['id_user'])){
include_once('conexao.php');

$id_user = $_GET['id_user'];
$sqlselect ="SELECT * FROM user WHERE id_user=$id_user";
$result = $conexao->query($sqlselect);

if($result->num_rows > 0){
   $sqlapagar="DELETE FROM user WHERE id_user=$id_user";
   $resultapagar = $conexao->query($sqlapagar);
}
}
header('location: listagem.php');
?>