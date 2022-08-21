<?php
include_once('conexao.php');

if(isset($_POST['up'])){
    $id_user = $_POST['id_user'];
    $datac = $_POST['datac'];
    $materia = $_POST['materia'];
    $conteudo = $_POST['conteudo'];

    $sqlup = "UPDATE user SET datac='$datac', materia='$materia',conteudo='$conteudo' 
    WHERE id_user='$id_user'";
    $result = $conexao->query($sqlup);
}
header('location: listagem.php');
?>