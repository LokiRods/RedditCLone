<?php
session_start();
if (!isset($_SESSION['id'])){
    ;  
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagem</title>
</head>
<body>
    <div class = "container" >
        <header class="header-container">
            
            <h3>Reddit 2.0</h3>
        </header>

        <main class="maincontainer">

            //Listar Postagens
                <?php

                    $conexao->query($sql);

                    $conexao = new mysqli("localhost","root","","reddit2.0");
            
                    $sql = "SELECT * from postagem ";
                     $conexao ->query($sql);
                ?>
        
        //Adicionar Postagens
        <input type="text" name="postagem" placeholder="O que você gostaria de dizer">

        <?php

        $conexao = new mysqli("localhost","root","","reddit2.0");

        $sql = "INSERT into postagem (postagem,idusuario)" 
        ;

        ?>
            








        </main>
    </div>
</body>
</html> 
