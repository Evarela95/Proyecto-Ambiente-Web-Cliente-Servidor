//Funciones de ADMINISTRACIÓN
$(document).on("click", ".open-UserDialog", function () {
    var myUserId = $(this).data('id_usuario');
    $("#userId").val(myUserId);
});




$(document).on("click", ".open-UserDialog", function () {
    var myUserId = $(this).data('id_usuario');
    $("#userId").val(myUserId);
});


function eliminarUser()
{
    $.ajax({
        url:"../Controller/ClientesController.php",
        type:"POST",
        data: { 
                "eliminarUser" : "eliminarUser", 
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