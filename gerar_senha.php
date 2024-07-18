<?php

    include_once'./conexao.php';

    $tipo = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_NUMBER_INT);
    //$tipo = $_GET['tipo'];
    if(!empty($tipo)){

        $query_senha = "SELECT id, nome
        FROM senha
        WHERE estado_senha_id=:estado_senha_id
        AND tipo_senha_id=:tipo_senha_id
        ORDER BY id ASC
        LIMIT 1";

        $result = $conn->prepare($query_senha);
        $result->bindValue(':estado_senha_id', 1, PDO::PARAM_INT);
        $result->bindParam('tipo_senha_id', $tipo, PDO::PARAM_INT);
        $result->execute();

        if(($result) and ($result->rowCount() > 0)){
            //$retorno = ['status'=> false, 'msg'=> "<span style='color: #f00;'>Senha gerada com sucesso! </span>"];
            $row = $result->fetch(PDO::FETCH_ASSOC);
            //var_dump($row);
            extract($row);

            $req_senha_gerada = "INSERT INTO senha_gerada (senha_id, estado_senha_id, data_hora)
                             VALUES($id, 2, NOW())";
            $res_senha_gerada = $conn->prepare($req_senha_gerada);
            $res_senha_gerada->execute();

            if($res_senha_gerada){
                                
                $senha_editada_id = "UPDATE senha SET estado_senha_id=2  WHERE id=$id LIMIT 1";

                $senha_editada_res = $conn->prepare($senha_editada_id);
                $senha_editada_res->execute();

                $retorno = ['status'=> true, 'nome'=> "<span>$nome</span>"];

            }else{
                $retorno = ['status'=> false, 'msg'=> "<span style='color: #f00;'>Erro: a senha nao foi gerada 1! </span>"];
            }

        }else{
            $retorno = ['status'=> false, 'msg'=> "<span style='color: #f00;'>Não tem mais senha disponivel! </span>"];
        }

    }else{
        $retorno = ['status'=> false, 'msg'=> "<span style='color: #f00;'>Sem conteudo disponivel. Senha nao foi gerada 3! </span>"];
    }

    echo json_encode($retorno);