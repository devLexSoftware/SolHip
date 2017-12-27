function abrir(archivo,ref){
  switch (archivo) {
    //---Para menu de inicio
    case "in":
      $("#divContenido").load('../../core/clientes/inicio.php');
      break;
    //---Para ingresar datos de clientes
    case "Clientes":
      $("#divContenido").load('../../core/clientes/index.php');
      break;
    //---Para Mostrar todos los clientes
    case "ListClientes":
      $("#divContenido").load('../../core/clientes/list.php');
      break;
    //---Para modificar un clientes
    case "cu":
      $("#divContenido").load('../../core/clientes/update.php?ref='+ref);
      break;
    //---Para campos faltantes en clientes
    case "cf":
    $("#divContenido").load('../../core/clientes/aviso.php?ref='+ref);
      break;
    //---Para avanzar a los documentos de clientes
    case "cs":
    $("#divContenido").load('../../core/clientes/documentos.php?ref='+ref);
      break;
    default:
  }
}
