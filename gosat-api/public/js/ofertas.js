consultaOfertas();

function montaCard(obj) {
    $.ajax('/montaHtmlCard', {
        type: 'POST',
        data: {
            obj: obj,
            _token: $("input[name='_token']").val(),
        },
        success: function(response){
            $('.container').html(response);
        },
        error: function(error){
            alert("Erro ofertas.js:15");
        }
    });
}

function consultaOfertas(){
    $.ajax('/api/v1/ofertas', {
        type: 'POST',
        data: {
            cpf: $("input[name='_cpf']").val(),
        },
        success: function(response){
            montaCard(response);
        },
        error: function(error){
            alert("Erro ofertas.js:30");
        }
    });
}
