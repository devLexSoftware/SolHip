function abrir(archivo,ref){
  alert(ref);
  switch (archivo) {
    //---Para campos faltantes
    case "cf":
    $("#divContenido").load('../../core/clientes/aviso.php?ref='+ref);
      break;
    //---Para avanzar a los documentos
    case "cs":
    $("#divContenido").load('../../core/clientes/documentos.php?ref='+ref);
      break;
    case "in":
      $("#divContenido").load('../../core/clientes/inicio.php');
      break;
    case "Clientes":
    $("#divContenido").load('../../core/clientes/index.php');
      break;
    default:
  }
}
