<?php
   include("conexao.php");
   $sql = "SELECT * FROM user";
   $result = $conexao->query($sql);
           
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Listagem de Registros</title>
</head>
<body style="width: 97.25%; background-color: #132639;">
<header>
     <div class="cab">
        <font class="tit" face="courier">
             <b> CLASSROOM NOTE </b>
        </font>
            <a href="index.php" class="visu1">voltar</a>
    </div>
</header> 
<br> 
<center>   
    <div>
        <table class="dados" border="2px">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Data</th>
                    <th scope="col">Matéria</th>
                    <th scope="col">Conteúdo</th> 
                    <th scope="col">Ações</th> 
                </tr>
            </thead>
            <tbody>
               <?php
                while($user_id = mysqli_fetch_assoc($result)){
                echo"<tr>";
                echo"<td>".$user_id['id_user']."</td>";
                echo"<td>".$user_id['datac']."</td>";
                echo"<td>".$user_id['materia']."</td>";
                echo"<td>".$user_id['conteudo']."</td>";
                echo"<td><a href='editar.php?id_user=$user_id[id_user]'>
                <button class='editar'>Editar</button>
                <a/>
                <a href='confirmarDelete.php?id_user=$user_id[id_user]'>
                <button class='delete'>Deletar</button>
                <a/>
                </td>";
                echo"</tr>";
               }
               ?>
            </tbody>
        </table>
    </div>
</body>
</html> 