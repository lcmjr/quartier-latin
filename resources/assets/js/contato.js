function ajax_contact(){
    if(!validaForm())
        return false;
    box_ajax_response("msg-result-contato", "Enviando a mensagem...","info");
    $.ajax({
        type: 'POST',
        url: $('#form-contact').attr("action"),
        data: $('#form-contact').serialize(),
        success: function (data) {
            $('#form-contact input,#form-contact textarea').val("");
            box_ajax_response("msg-result-contato", "Mensagem enviada com sucesso, obrigado pelo contato!", "success");
        },
        error: function (erro) {
            console.log(erro);
            box_ajax_response("msg-result-contato", "Ocorreu um erro no envio!", "danger");
        }
    });
    return false;
}
function validaForm(){
    erro_campo_preenchido = false;
    $(".required-ipt").each(function(){
        if ($(this).val() == '') {
            erro_campo_preenchido = true;
            var nome_campo = $(this).attr("data-required-name");
            box_ajax_response("msg-result-contato", "Preencha o campo "+nome_campo+" !", "danger");
            return false;
        }
    });
    return !erro_campo_preenchido;
}