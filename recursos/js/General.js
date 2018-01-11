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
    case "lcs":
        $("#divContenido").load('../../core/clientes/list.php');
      break;
    //----Para buscar clientes desde el menu
    case "csr":      
        $("#divContenido").load('../clientes/templates/searchClient.php?ref='+ref);
      break;
    //---Para guardar documentos de un cliente
    case "lc":
      $("#divContenido").load('../../core/clientes/list.php');
      $('#ModalCambioDocumentos').modal('show');
      break;
    case "im":
      $("#divContenido").load('../../core/clientes/list.php');
      window.open("../../core/clientes/actions/imprimir.php?ref="+ref+"&f=d", "nombre de la ventana");
      break;
    case "imba":
      $("#divContenido").load('../../core/clientes/list.php');
      window.open("../../core/clientes/actions/imprimir.php?ref="+ref+"&f=b", "nombre de la ventana");
      break;
    case "imbr":
      $("#divContenido").load('../../core/clientes/list.php');
      window.open("../../core/clientes/actions/imprimir.php?ref="+ref+"&f=br", "nombre de la ventana");
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
    case "csA":
    $("#divContenido").load('../../core/clientes/documentos.php?ref='+ref);
    $('#ModalCambioDocumentos').modal('show');
      break;

    default:
  }
}
