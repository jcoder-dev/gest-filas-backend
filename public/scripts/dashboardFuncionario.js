let balcao = 1;
let filaSenhas=[];
const botaoProximo = document.getElementById("botaoProximo");
const registrosTabela = document.getElementById("registrosTabela");

window.addEventListener("load", ()=>{
    filaSenhas = [
            {
                "codigo":"A0033", 
                "horaRetiro":"12:37:05",
                "estado" : "Em Atendimento",
                "balcao" :"1"
            },
            {
                "codigo":"C0012", 
                "horaRetiro":"12:38:47",
                "estado" : "Em Atendimento",
                "balcao" :"2"
            },
            {
                "codigo":"C0013", 
                "horaRetiro":"12:42:15",
                "estado" : "Espera",
                "balcao" :"-"
            },
            {
                "codigo":"B001", 
                "horaRetiro":"12:45:39",
                "estado" : "Espera",
                "balcao" :"-"
            },
            {
                "codigo":"D005", 
                "horaRetiro":"12:45:45",
                "estado" : "Espera",
                "balcao" :"-"
            }
        ];
    
    carregarDados();
    botaoProximo.addEventListener("click", ()=>{
        chamarProximo("OLA ERIVELTO");
    });

});

function chamarProximo(codigoSenha)
{
    
    let senha = filaSenhas.shift();
    let uterrance = new SpeechSynthesisUtterance("SENHA "+senha.codigo+", Balcão "+ balcao);
    uterrance.lang = "pt-PT";
    speechSynthesis.speak(uterrance);
    registrosTabela.innerText="";
    carregarDados();
}

function carregarDados()
{
    filaSenhas.forEach(element => {
        let aux="completed";
        if(element.estado=="Espera") aux ="pending"  
        
        let linha = `
        <tr>
            <td>
                <img src="../imagens/login/iconeLogin.png">
                <p>${element.codigo}</p>
            </td>
            <td>${element.horaRetiro}</td>
            <td><span class="status ${aux}">${element.estado}</span></td>
            <td><span>${element.balcao}</span></td>
        </tr> `;
        registrosTabela.insertAdjacentHTML("beforeend", linha);
    });
}