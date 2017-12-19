function abrir(archivo){
  switch (archivo) {
    case "Clientes":
    $("#divContenido").load('../../core/clientes/index.php');
      break;
    default:
  }
}

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
        '<input class="form-control" type="text" name='+ par + count +' value="" placeholder="Parentezco"> ' +
      '</div> ' +
      '<div class="form-group col-md-1"> ' +
        '<p class="sMargen">Edad</p> ' +
        '<input class="form-control" type="text" name='+ eda + count + ' value="" placeholder="Edad"> ' +
        '</div>' +
    '</div>';
    count++;
  }
  $("#divDependientes").html(cadena);
}
