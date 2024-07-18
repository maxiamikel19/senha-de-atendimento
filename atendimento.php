<?php
    require_once('./conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atendimento</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php
        include('menu.php'); 
    ?>

    <div class="container">
        <h3>Atendimento</h3>
        <?php 
            echo " <button type='button' onclick='chamarSenha(1)'>Normal</button>";

            echo " <button type='button' onclick='chamarSenha(2)'>Prioritário</button>";
        ?>
        <div id="statusMessage"><span></span></div>

        <p>Senha: <span id="senhaGerada"></span></p>

            <div class="senha-container">
                <h4>Geradas</h4>
                <div class="senhas">
                    <?php        

                        $query_senha_emitida = "SELECT emitida.id, emitida.data_hora, livre.nome, tipo.tipo
                                                FROM senha_gerada AS emitida
                                                INNER JOIN senha AS livre ON emitida.senha_id = livre.id
                                                INNER JOIN tipo_senha AS tipo ON tipo.id = livre.tipo_senha_id
                                                WHERE emitida.estado_senha_id = 2
                                                ORDER BY id ASC";
                        
                        $res_senha_emitida = $conn->prepare($query_senha_emitida);
                        $res_senha_emitida->execute();
                        
                        while($row_senha_emitida = $res_senha_emitida->fetch(PDO::FETCH_ASSOC)){
                            //var_dump($row_senha_emitida);

                            extract($row_senha_emitida);
                            switch($tipo){
                                case 'Convencional':
                                    echo "<div class='senha'>";
                                    echo "DATA/HORA............: $data_hora<br>";
                                    echo "ID............: $id<br>";
                                    echo "SENHA.........: $nome <br>";
                                    echo "TIPO..........: $tipo <br>";
                                    echo "</div>";
                                    break;
                                case 'Preferencial':
                                    echo "<div class='senha-preferencial'>";
                                    echo "DATA/HORA............: $data_hora<br>";
                                    echo "ID............: $id<br>";
                                    echo "SENHA.........: $nome <br>";
                                    echo "TIPO..........: $tipo <br>";
                                    echo "</div>";
                                    break;
                                default:
                                echo "<div class='senha'></div>";

                            }
                            
                        }
                        
                    ?>
                </div>
            </div>
        </div>
    <script lang="javascript" src="js/custom.js"></script>

</body>
</html>
