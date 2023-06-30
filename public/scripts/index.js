let email;
let senha;
window.addEventListener("load", ()=>{
    email = document.getElementById("email");
    senha = document.getElementById("senha");
    document.getElementById("botaoEntrar").addEventListener("click", (e)=>{
        let resposta = validarFormulario();
        if(resposta==true)
            enviarDados();
        else
            window.alert(resposta);
        e.preventDefault();
    });    
});


function limparCampos()
{
    email.value = "";
    senha.value = "";
}

function validarFormulario()
{
    let TAMANHO_MINIMO_SENHA = 4;
    let regex = /\S+@\S+\.\S+/;
    if(email.value == "")     
        return "O campo Email está vazio! Preencha-o por favor.";
    else if(!regex.test(email.value))
        return "O email não está no formato: name@example.com! Retifique por favor.";
    else if(senha.value == "") 
        return "O campo senha está vazio! Preencha-o por favor";
    else if(senha.value.length < TAMANHO_MINIMO_SENHA)
        return "A senha deve conter no mínimo "+TAMANHO_MINIMO_SENHA+" caracteres!";
    return true;
}

function enviarDados()
{
    if(email.value =="admin@gmail.com" && senha.value=="1234")
        window.location.assign("./paginas/dashboardFuncionario.html");
    else if(email.value =="visitante@gmail.com" && senha.value=="1234")
        window.location.assign("./paginas/TelaSenha.html");
    else
    {
        alert("Email ou Senha Incorrecto, tente novamente!");
        limparCampos();
    }
}