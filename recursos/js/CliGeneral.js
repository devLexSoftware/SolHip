function CDependientes(cant) {
  var count = 0 ;
  var cadena = "";
  var par = "cliContactoParentezco";
  var eda = "cliContactoEdad";
  while (count < cant) {
    cadena = cadena +
    '<div class="form-group row"> ' +
      '<div class="form-group col-md-3"> ' +
        '<p class="sMargen">Parentezco</p> ' +
        '<select class="form-control" name='+ par + count +' value="" placeholder="Parentezco"> ' +
          '<option selected="selected">Parentezco</option> ' +
          '<option>Padre</option> ' +
          '<option>Madre</option> ' +
          '<option>Hijo</option> ' +
          '<option>Hija</option> ' +
          '<option>Primo</option> ' +
          '<option>Prima</option> ' +
          '<option>Abuelo</option> ' +
          '<option>Abuela</option> ' +
        '</select>' +
      '</div> ' +
      '<div class="form-group col-md-1"> ' +
        '<p class="sMargen">Edad</p> ' +
        '<input class="form-control" type="number" name='+ eda + count + ' value="" placeholder="Edad"> ' +
        '</div>' +
    '</div>';
    count++;
  }
  $("#divDependientes").html(cadena);
}


function enviarDatosEmpleado(){

  //div donde se mostrará lo resultados
  divResultado = document.getElementById('resultado');
  //recogemos los valores de los inputs

  //--Informacion principal
  cliNombre         =document.Cliente.cliNombre.value;
  cliApellido       =document.Cliente.cliApellido.value;
  cliNss            =document.Cliente.cliNss.value;
  cliRfc            =document.Cliente.cliRfc.value;
  cliFechNacimiento =document.Cliente.cliFechNacimiento.value;
  cliNivAcademico   =document.Cliente.cliNivAcademico.value;

  //--Informacion direccion
  cliCalle          =document.Cliente.cliCalle.value;
  cliColonia        =document.Cliente.cliColonia.value;
  cliNumExt         =document.Cliente.cliNumExt.value;
  cliNumInt         =document.Cliente.cliNumInt.value;
  cliCP             =document.Cliente.cliCP.value;
  cliAntiguedad     =document.Cliente.cliAntiguedad.value;
  cliTipo           =document.Cliente.cliTipo.value;

  //--Informacion localizacion
  cliTelCasa=document.Cliente.cliTelCasa.value;
  cliTelMovil=document.Cliente.cliTelMovil.value;
  cliEmail=document.Cliente.cliEmail.value;

  //--Informacion laboral
  cliEmail=document.Cliente.cliEmail.value;
  cliEmail=document.Cliente.cliEmail.value;
  cliEmail=document.Cliente.cliEmail.value;


  //instanciamos el objetoAjax
  ajax=objetoAjax();

  //uso del medotod POST
  //archivo que realizará la operacion
  //registro.php
  ajax.open("POST", "registro.php",true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) {
  		//mostrar resultados en esta capa
		divResultado.innerHTML = ajax.responseText
  		//llamar a funcion para limpiar los inputs
		LimpiarCampos();
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send("nombre="+nom+"&apellido="+ape+"&web="+web)
}
