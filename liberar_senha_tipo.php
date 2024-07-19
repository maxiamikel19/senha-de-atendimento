<?php

    include_once'./conexao.php';

    $tipo = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_NUMBER_INT);

    if(!empty($tipo)){

        $req_liberar_senha = "UPDATE senha 
                              SET estado_senha_id = 1
                              WHERE tipo_senha_id =:tipo_senha_id";
        $res_liberar_senha = $conn->prepare($req_liberar_senha);
        $res_liberar_senha->bindParam('tipo_senha_id', $tipo, PDO::PARAM_INT);
        $res_liberar_senha->execute();

        $retorno = ['status'=> true, 'msg'=> "<p style='color: green;'>Liberadas ucesso!!</p>"];
    }else{
        $retorno = ['status'=> false, 'msg'=> "<p style='color: #f00;'>Error: O tipo informado nao </p>"];
    }

    echo json_encode($retorno);