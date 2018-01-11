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

function CDependientesUpdate() {
  document.getElementById('divDependientesOriginales1').innerHTML = "";
  document.getElementById('divDependientesOriginales2').innerHTML = "";

  document.getElementById('divContenidoDependientes').innerHTML = '<div class="form-group row">'+

    '<div class="form-group col-md-2">'+
      '<p class="sMargen">Dependientes Económicos</p>'+
      '<select class="form-control" name="cliNDependientes" value="0" placeholder="Dependientes" onchange="CDependientes(this.value)">'+
        '<option value="0">0</option>'+
        '<option value="1">1</option>'+
        '<option value="2">2</option>'+
        '<option value="3">3</option>'+
        '<option value="4">4</option>'+
        '<option value="5">5</option>'+
        '<option value="6">6</option>'+
        '<option value="7">7</option>'+
        '<option value="8">8</option>'+
      '</select>'+
    '</div>'+
  '</div>'+
  '<div id="divDependientes">'+
  '</div>';
}

function buscarCliente(){
  location.href="index.php?p=csr&ref="+$('#idfilName').val();
}


function filtrarListaClientes(){
  var filtro = "";
  var campo = "";
  var and = 0;
  if ($('#idfilNombre').val() != "") {
    var res = $('#idfilNombre').val();
    campo = " MATCH(Clientes.find) AGAINST('"+res+"')";
    //filtro.push(campo);
    filtro = filtro + campo;
    and++;
  }
  campo = "";
  if ($('#idfilEstatus').val() != "Todos") {
    if(and != 0)
      campo = " AND";
    campo = campo + " Clientes.estado= '"+$('#idfilEstatus').val()+"'";
    filtro = filtro + campo;
    and++;
  }
  campo = "";
  if ($('#idfilBanco').val() != "Todos") {
    if(and != 0)
      campo = " AND";
    campo = campo + " PerfilCliente.banco= '"+$('#idfilBanco').val()+"'";
    filtro = filtro + campo;
    //filtro.push($('#idfilBanco').val());
    and++;
  }
  campo = "";
  if ($('#idfilPerfil').val() != "Todos") {
    if(and != 0)
      campo = " AND";
    campo = campo + " PerfilCliente.nombre= '"+$('#idfilPerfil').val()+"'";
    filtro = filtro + campo;
    //filtro.push($('#idfilBanco').val());
    and++;
  }
  $.post("../clientes/templates/tableClientes.php", { filtro: filtro }, function(data){
    $("#divTableClientes").html(data);
  });
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
