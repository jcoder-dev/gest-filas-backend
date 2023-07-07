const entradaID = document.getElementById("idEstudante");
const botaoQueroSenha = document.getElementById("botaoQueroSenha");
const botaoVoltar = document.getElementById("botaoVoltar");
const botaoRequisitarSenha = document.getElementById("botaoRequisitarSenha");
const opcoesRequisicao = document.querySelectorAll(".opcao");
const divIDEstudante = document.getElementById("divIDEstudante");
const selectorTipoCliente = document.getElementById("tipo-usuario");
let codigoRequisicao;

window.addEventListener("load", ()=>{
    selectorTipoCliente.addEventListener("change", ()=>{
        if(selectorTipoCliente.value=="2")
        {
            divIDEstudante.classList.remove("d-flex");
            divIDEstudante.classList.add("esconder");
        }
        else
        {
            divIDEstudante.classList.remove("esconder");
            divIDEstudante.classList.add("d-flex");
        }
    });

    botaoQueroSenha.addEventListener("click", ()=>{
        tela1.classList.replace("mostrar", "esconder");
        tela2.classList.replace("esconder", "mostrar");
    });


    botaoVoltar.addEventListener("click", ()=>{
        tela1.classList.replace("esconder", "mostrar");
        tela2.classList.replace("mostrar", "esconder");
        tela3.classList.replace("mostrar", "esconder");
    });


    botaoAvancar.addEventListener("click", ()=>{
        if(selectorTipoCliente.value == "2")
        {
            tela1.classList.replace("mostrar", "esconder");
            tela2.classList.replace("mostrar", "esconder");
            tela3.classList.replace("esconder", "mostrar");
        }
        else
        {
            if(!validarIDEstudante())
                alert("ID com formato inválido! Verifique por favor!");
            else
            {
                tela1.classList.replace("mostrar", "esconder");
                tela2.classList.replace("mostrar", "esconder");
                tela3.classList.replace("esconder", "mostrar");
            }
        }
    });

    opcoesRequisicao.forEach(element => {
        element.classList.remove("active");
        element.addEventListener("click", ()=>{
            codigoRequisicao = element.innerHTML;
            element.classList.add("active");
        });
    });
    botaoRequisitarSenha.addEventListener("click", ()=>{
        if(codigoRequisicao==null){
            alert("Escolha um serviço primeiro");
        }
        else{
            alert("Serviço escolhido:"+codigoRequisicao);
            gerarSenha();
            reiniciar();
        }
    });


});

function validarIDEstudante()
{
    const regex = /10000\d/;
    if(!regex.test(entradaID.value))
        return false;
    return true;
}

function reiniciar()
{
    tela1.classList.replace("esconder", "mostrar");
    tela2.classList.replace("mostrar", "esconder");
    tela3.classList.replace("mostrar", "esconder");
    codigoRequisicao=null;
    entradaID.value="";
    opcoesRequisicao.forEach(element => {element.classList.remove("active");});
}

function gerarSenha()
{

}
