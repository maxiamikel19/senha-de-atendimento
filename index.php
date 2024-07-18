<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de gestão de senha</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h3>Sistema de gestão de senha de atendimento</h3>

    <div id="statusMessage"><span></span></div>

    <p>Senha: <span id="senhaGerada"></span></p>

    <button type="button" onclick="gerarSenha(1)">Atendimento Normal</button>
    <button type="button" onclick="gerarSenha(2)">Atendimento Prioritário</button>

    <script lang="javascript" src="js/custom.js"></script>
</body>
</html>