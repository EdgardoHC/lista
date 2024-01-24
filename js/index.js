$(document).ready(function () {
    llenarCombo();
});

function llenarCombo() {
    $.ajax({
        url: "inc/llenarlista.php"
    })
            .done(function (msg) {
                $.each(msg.datos, function () {
                    $("#resultado").append($("<option></option>").val(this['id']).html(this['nombre']));
                });

            })
            .fail(function (msg) {
                alert("Hubo un problema");
            });
}