async function gerarSenha(idTipoSenha){
    const dados = await fetch('gerar_senha.php?tipo='+idTipoSenha)
    
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