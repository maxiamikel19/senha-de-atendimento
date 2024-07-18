<?php

    include_once'./conexao.php';

    $tipo_senha = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_NUMBER_INT);
    //$tipo = $_GET['tipo'];
    if(!empty($tipo_senha)){

        $req_senha_gerada = "SELECT gerada.id as id_gerada, livre.nome
                            FROM senha_gerada AS gerada
                            INNER JOIN senha AS livre ON livre.id=gerada.senha_id
                            WHERE gerada.estado_senha_id = 2
                            /*AND livre.tipo_senha_id =$tipo*/
                            AND livre.tipo_senha_id=:tipo_senha_id
                            ORDER BY gerada.id ASC
                            LIMIT 1";

        $res_senha_gerada = $conn->prepare($req_senha_gerada);
        $res_senha_gerada->bindParam(':tipo_senha_id', $tipo_senha, PDO::PARAM_INT);
        $res_senha_gerada->execute();

        if(($res_senha_gerada) and ($res_senha_gerada->rowCount() != 0)){

            $row_senha_gerada = $res_senha_gerada->fetch(PDO::FETCH_ASSOC);
            extract($row_senha_gerada);

            //var_dump($row_senha_gerada);

            $req_senha_edit = "UPDATE senha_gerada
                          SET estado_senha_id = 3, modificado = NOW()
                          WHERE id = $id_gerada";
            
            $res_senha_edit = $conn->prepare($req_senha_edit);
            $res_senha_edit->execute();

            if(($res_senha_edit) and ($res_senha_edit))

            $retorno = ['status'=> true, 'msg'=> "<span style='color: green;'>Senha chamada: $nome </span>", 'id_gerada'=>$id_gerada];
        }else{
            $retorno = ['status'=> false, 'msg'=> "<span style='color: #f00;'>Lista vazia!! Não tem mais atendimento no momento.</span>"];
        }

    }else{
        $retorno = ['status'=> false, 'msg'=> "<span style='color: #f00;'>Senha nao foi chamada! </span>"];
    }

    echo json_encode($retorno);