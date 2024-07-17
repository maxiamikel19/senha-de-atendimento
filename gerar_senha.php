<?php

    $tipo = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_NUMBER_INT);
    //$tipo = $_GET['tipo'];
    if(!empty($tipo)){
        $retorno = ['status'=> true, 'msg'=> "<p style='color: #f00;'>Senha gerada com sucesso!</p>"];
    }else{
        $retorno = ['status'=> true, 'msg'=> "<p style='color: #f00;'>Senha n&atilde;o foi gerada!</p>"];
    }

    echo json_encode($retorno);