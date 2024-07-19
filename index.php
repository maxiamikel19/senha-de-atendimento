<?php 
    require_once('./conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar Senha</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
    <?php
        include('menu.php');
    ?>
    <div class="container">
        <h3>Gerar Senha</h3>
    
        <div id="statusMessage"><span></span></div>

        

        <?php 
            $req_nemu = "SELECT tp.id, tp.tipo
            FROM tipo_senha as tp";
            $res_nemu = $conn->prepare($req_nemu);
            $res_nemu->execute();
            
            while($row_nemu = $res_nemu->fetch(PDO::FETCH_ASSOC)){

                extract($row_nemu);
                
                echo "<button type='button' onclick='gerarSenha($id)'>$tipo</button>";
            }

        ?>
        <p>Senha: <span id="senhaGerada"></span></p>
    </div>
   

    <script lang="javascript" src="js/custom.js"></script>
</body>
</html>