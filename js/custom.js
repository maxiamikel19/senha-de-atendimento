async function gerarSenha(idTipoSenha){
    const dados = await fetch('gerar_senha.php?tipo='+idTipoSenha);
    
    const dadosJson = await dados.json();
    
    //console.log(dadosJson)

    if(!dadosJson['status']){
        document.getElementById('statusMessage').innerHTML= dadosJson['msg'];
        document.getElementById('senhaGerada').innerHTML= "";
    }else{
        document.getElementById('senhaGerada').innerHTML= dadosJson['nome'];
        document.getElementById('statusMessage').innerHTML= "";
    }
}


async function chamarSenha(tipoSenha){

    //alert('Chamou a senha: '+ tipoSenha);
    const dados = await fetch('chamar_senha.php?tipo=' + tipoSenha);

    const response = await dados.json();
    //console.log(response);
    if(!response['status']){
        document.getElementById("statusMessage").innerHTML= response["msg"];
    }else{
        document.getElementById("statusMessage").innerHTML= response["msg"];

        var listaDeSenha = document.getElementById("senhas");

        var senha = document.getElementById("senha-" + response['id_gerada']);

        //Remover da lista de chamada
        listaDeSenha.removeChild(senha);
    }
    
}