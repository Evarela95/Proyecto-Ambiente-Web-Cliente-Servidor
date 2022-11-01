
$(document).ready(function() {
    HabilitarBoton(true);
});

function ValidarDatos() {
    let usuario = document.getElementById("Usuario").value;
    let contrasena = document.getElementById("Contrasena").value;

    if (usuario != "" && contrasena != "") {
        HabilitarBoton(false);

    }else{
        HabilitarBoton(true);
    }
}

function HabilitarBoton(flag)
{
    $("#btnIngresar").prop("disabled", flag);
}



/* Ejemplo del profe 

$(document).ready(function() {
    HabilitarBoton(true);
});

function ValidarDatos() {
    let usuario = document.getElementById("Usuario").value;
    let contrasena = document.getElementById("Contrasena").value;

/*
    let request = new XMLHttpRequest();
    request.open('GET', 'LINK' + variable);
    request.send(); 
    
    request.onload = function(){
    let variable( JSON.parse(request.response) );
    alert(variable.atributo)   
    
    if(variable.atributo == ????){ SI SI EXISTE
CONTINUE
    }else{
MENSAJE DE USUARIO NO ENCOTRADO

    }
}
    ------


    if (identificacion != "") {

        $.ajax({
            type: "GET",
            url: 'https://apis.gometa.org/cedulas/' + identificacion,
            data: { },
            datatype: 'json',
            success: function(response)
            {
                if (response.resultcount == undefined || response.resultcount == 0) {
                    HabilitarBoton(true);
                }
                else {
                    HabilitarBoton(false);
                }
            }
       });

    }
}

function HabilitarBoton(flag)
{
    $("#btnIngresar").prop("disabled", flag);
}
/*


/* Primer ejemplo de página web 
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("formulario").addEventListener('submit', validarFormulario); 
});

function validarFormulario(evento) {
  evento.preventDefault();
  var usuario = document.getElementById('usuario').value;
  if(usuario.length == 0) {
    alert('No has escrito nada en el usuario');
    return;
  }
  var clave = document.getElementById('clave').value;
  if (clave.length < 6) {
    alert('La clave no es válida');
    return;
  }
  this.submit();
}
*/


/* Segundo ejemplo de página web 
function valida_envia(){
   	//valido el nombre
   	if (document.fvalida.nombre.value.length==0){
      		alert("Tiene que escribir su nombre")
      		document.fvalida.nombre.focus()
      		return 0;
   	}
	
   	//valido la edad. tiene que ser entero mayor que 18
   	edad = document.fvalida.edad.value
   	edad = validarEntero(edad)
   	document.fvalida.edad.value=edad
   	if (edad==""){
      		alert("Tiene que introducir un número entero en su edad.")
      		document.fvalida.edad.focus()
      		return 0;
   	}else{
      		if (edad<18){
         			alert("Debe ser mayor de 18 años.")
         			document.fvalida.edad.focus()
         			return 0;
      		}
   	}
	
   	//valido el interés
   	if (document.fvalida.interes.selectedIndex==0){
      		alert("Debe seleccionar un motivo de su contacto.")
      		document.fvalida.interes.focus()
      		return 0;
   	}
	
   	//el formulario se envia
   	alert("Muchas gracias por enviar el formulario");
   	document.fvalida.submit();
} 
*/