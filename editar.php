<?php
if(!empty($_GET['id_user'])){
include_once('conexao.php');

$id_user = $_GET['id_user'];
$sqlselect ="SELECT * FROM user WHERE id_user=$id_user";
$result = $conexao->query($sqlselect);

if($result->num_rows > 0){
   while($user_id = mysqli_fetch_assoc($result)){
   $datac = $user_id['datac'];
   $materia = $user_id['materia'];
   $conteudo = $user_id['conteudo'];
}

}else{
    header('location: listagem.php');
} 
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Registro</title>
    <link rel="stylesheet" type="text/css" href="css.css">
    
</head>
<body style="width: 97.25%; background-color: #132639;">
        <header>
            <div class="cab">
                <font class="tit" face="courier">
                    <b> CLASSROOM NOTE </b>
                </font>

                <nav class="menu">
                    <ul class="drop_menu">
                        <li>
                            <a href="#"><font class="font_m" face="courier"><b>INFO &#9660;</b></font></a>
                            <ul class="down_menu">
                                <section>                                  
                                    <div class="container">
                                        <?php
                                        echo "<b>Nome do Arquivo:</b>  "; echo $_SERVER['PHP_SELF'];
                                        echo "<br>"; echo "<br>";
                                        echo "<b>Nome do Servidor:</b>  "; echo $_SERVER['SERVER_NAME'];
                                        echo "<br>"; echo "<br>";
                                        echo "<b>Número do Protocolo:</b>  "; echo $_SERVER['SERVER_PROTOCOL'];
                                        echo "<br>"; echo "<br>";
                                        echo "<b>Nome do Software:</b>  "; echo $_SERVER['SERVER_SOFTWARE'];
                                        echo "<br>";
                                        echo "<br>";
                                        ?>
                                    </div>
                                </section>
                           </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>     
    </div>
    <br>
     <br>
     <center>
         <form class="cd" action="salvarEdicao.php" method="POST">
            <!-- <fieldset> -->
             <legend><font class="tit_cont" face="courier"><strong>INSIRA OS DADOS</strong></font></legend>
             <br>
             <label><font class="i_cont" face="courier"><b>Data</b></font><br></label>
             <input type="date" name="datac" class="i1" id="d" placeholder="Digite a data"
             required value="<?php echo $datac ?>"><br><br>

             <label><font class="i_cont" face="courier"><b>Matéria</b></font><br></label>
             <input type="text" name="materia" class="i2" id="m" placeholder="Digite o nome da matéria" 
             required value="<?php echo $materia ?>"><br><br>

             <label><font class="i_cont" face="courier"><b>Conteúdo</b></font><br></label>
             <textarea type="text" name="conteudo" class="i3" id="c" placeholder="Escreva á respeito do conteúdo" 
             required value="<?php echo $conteudo ?>"></textarea> 
             
             <input type="hidden" name="id_user"  value="<?php echo $id_user ?>">
             <button class="save" name="up" type="submit" id="up"><b>Salvar</b></button>
             
             
             <!-- </fieldset> -->
         </form>
         <br><br>
     <a href="listagem.php" class="visu">voltar</a>
     </center>
    
<script src="http://code.jquery.com/jquery-1.12.0.min"></script>
<script type="text/javascript"></script>
</body>
</html>