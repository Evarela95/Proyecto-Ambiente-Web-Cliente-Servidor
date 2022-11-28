//Funciones de ADMINISTRACIÓN
$(document).on("click", ".open-UserDialog", function () {
    var myUserId = $(this).data('id');
    $("#userId").val(myUserId);
});

function InactivarUsuario()
{
    $.ajax({
        url:"../Controller/ClientesController.php",
        type:"POST",
        data: { 
                "InactivarUsuario" : "InactivarUsuario", 
                "Id" : document.getElementById("userId").value 
              },
        success:function(data){
            window.location.href = "ADMINISTRACION.php";
        },
        error:function(data){
            //Que pasa si algo sale mal??
        }
    });

}