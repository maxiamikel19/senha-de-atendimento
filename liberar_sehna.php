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
        include('menu.php');
    ?>
    <div class="container">
        <h3>Liberar Senha</h3>
    
        <div id="statusMessage"><span></span></div>

        <p><span id="senhaGerada"></span></p>

        <button type="button" onclick="liberarSenha(1)">Convencional</button>
        <button type="button" onclick="liberarSenha(2)">Preferencial</button>
    </div>
   

    <script lang="javascript" src="js/custom.js"></script>
</body>
</html>