<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liberar Senha</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
    <?php
        require_once('./conexao.php');
        include('menu.php');
    ?>
    <div class="container">
        <h3>Liberar Senha</h3>
    
        <div id="statusMessage"><span></span></div>

        <p><span id="senhaGerada"></span></p>
        <?php 
            $req_senha = "SELECT tp.id,tp.tipo FROM tipo_senha AS tp";
            $res_senha = $conn->prepare($req_senha);
            $res_senha->execute();

            while($row_senha = $res_senha->fetch(PDO::FETCH_ASSOC)){
                extract($row_senha);
                echo "<button type='button' onclick='liberarSenha($id)'>$tipo</button>";
            }
        ?>

    </div>
   

    <script lang="javascript" src="js/custom.js"></script>
</body>
</html>