<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Confirmar delete</title>
</head>
<body>
    <center>
        <div class="confirmar">
        <?php
            $id_user = filter_input(INPUT_GET,'id_user',FILTER_SANITIZE_NUMBER_INT);
            echo"Deseja excluir esse registro ("."<b>ID: </b>".$id_user;
            echo") ?";
            echo"<br>";
            echo"<br>";
            echo"<br>";
            echo"<a href='deletar.php?id_user=$id_user' class='confirmarS'>Sim</a>";
            echo" ";
            echo"<a href='listagem.php' class='confirmarN'>Não</a>";
        ?>
        </div>
    </center>
</body>
</html>
