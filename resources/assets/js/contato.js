function ajax_contact(){
    box_ajax_response("msg-result-contato", "Enviando a mensagem...","info");
    $.ajax({
        type: 'POST',
        url: "contato",
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