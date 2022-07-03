function limparMsgDeErroDaTela() {

    $('#msg-erro-cpf').hide();

}

function formatarCpf(cpf){
    return cpf.replace(/[^\d]+/g,'');
}

function mensagemDeCpfNaoAceito(){

    let divError = $("#msg-error-cpf");
    if(divError.is(":hidden")){
        divError.css('display','flex');
    }
}

function mascara(i){
    var v = i.value;

    if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
        i.value = v.substring(0, v.length-1);
        return;
    }

    i.setAttribute("maxlength", "14");
    if (v.length == 3 || v.length == 7) i.value += ".";
    if (v.length == 11) i.value += "-";

}

function validarCpf(form){
    $.ajax('/api/v1/cpf', {
        type: 'POST',
        data: {
            cpf: $("input[name='cpf']").val(),
        },
        success: function(response){
            let cpfDigitado = formatarCpf($("input[name='cpf']").val());
            if(response){
                if(cpfDigitado === response){
                    limparMsgDeErroDaTela();
                    submitForm(form);
                }else{
                    mensagemDeCpfNaoAceito();
                }
            }
        },
        error: function(error){
            mensagemDeCpfNaoAceito();
        }
    });
}



//-------------------------------------------------------------

$("form[name='form-cpf']").on("submit", function (e){
    e.preventDefault();
    validarCpf(this);
})

function submitForm(form){
    form.action = "/ofertas";
    form.submit();
}





