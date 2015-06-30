$(document).ready(function () {
    $('#btn-user-submit').click(function () {
        var form = $(this).parent();
        if (form.find('#name').val() == '') {
            alert('Preencha o nome');
        } else if (form.find('#email').val() == '') {
            alert('Preencha o e-mail');
        } else if (form.find('#password').val() == '') {
            alert("Preencha a senha")
        } else if (form.find("#password").val() != form.find("#password_confirm").val()) {
            alert("A confirmação de senha não está correta.")
        } else {
            return true;
        }
        return false;
    })
});