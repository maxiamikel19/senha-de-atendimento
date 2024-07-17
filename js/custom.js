async function gerarSenha(idTipoSenha){
    const dados = await fetch('gerar_senha.php?tipo=' + idTipoSenha)
    
    const dadosJson = await dados.json();
    
    console.log(dadosJson)
}