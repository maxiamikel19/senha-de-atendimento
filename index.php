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

        <p>Senha: <span id="senhaGerada"></span></p>

        <button type="button" onclick="gerarSenha(1)">Atendimento Normal</button>
        <button type="button" onclick="gerarSenha(2)">Atendimento Prioritário</button>
    </div>
   

    <script lang="javascript" src="js/custom.js"></script>
</body>
</html>