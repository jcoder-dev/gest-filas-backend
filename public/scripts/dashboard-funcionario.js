
$(document).ready(function() {

let balcao = 1;
let codigo = document.getElementById('codigo_senha');
const botaoProximo = document.querySelector(".btnProximo")



botaoProximo.addEventListener("click", function () {
    var table = document.getElementById("table-senhas");

    let uterrance = new SpeechSynthesisUtterance("SENHA " + "Balcão 1 ");
    uterrance.lang = "pt-PT";
    speechSynthesis.speak(uterrance);

     dadosSenha(table)
    // Output the value
});



function dadosSenha(table)
{
    // Get the first row of the table
    var primeiraLinha = table.rows[1];

    // Get the first cell (td) of the first row
    var codigo = primeiraLinha.cells[0];
    var horaRetiro = primeiraLinha.cells[1];

    // Get the value of the first cell
    var codigo = codigo.innerHTML;
    var url = "alterar-estado-senha/" + codigo;
    $.ajaxSetup({
        headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
     });

    console.log(url);
    $.ajax({
        url: url,
        type: "POST",
        cache: false,
        success: function(dataResult){
            console.log(dataResult);

            atualizarSenhas();
            chamarProximo(codigo);

        }
    });
}


function chamarProximo(codigoSenha) {

    let uterrance = new SpeechSynthesisUtterance("SENHA " + codigoSenha + "Balcão 1 ");
    uterrance.lang = "pt-PT";
    speechSynthesis.speak(uterrance);


}


    // Function to retrieve data and update the table
    function atualizarSenhas() {
        $.ajax({
            url: '/senhas/',
            type: 'GET',
            success: function(response) {
                // Clear existing table rows
                $('#table-senhas tbody').empty();

                // Loop through the retrieved data and add rows to the table
                $.each(response, function(index, data) {

                        var row = $('<tr>').append(
                            $('<td>').text(data.codigo),
                            $('<td>').text(data.created_at),
                            $('<td>').text(data.estado)
                        );
                        $('#table-senhas tbody').append(row);


                });
            },
            error: function(xhr) {
                // Handle the error response here
            }
        });
    }

    // Initial data retrieval and table update
    atualizarSenhas();
    // Set interval to reload the table every second

});



