$(document).ready(function () {

    $("#btn-submit").click(function (event) {
        event.preventDefault();
        var form = $('#form_excel')[0];
        var data = new FormData(form);
        $("#btn-submit").prop("disabled", true);
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "./accion.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function (data) {
                Swal.fire(
                    'Importación Masiva Correcta',
                    'Haga click para continuar',
                    'success'
                  ).then(function (){
                      location.reload();
                  })
            }
        });

    });

});