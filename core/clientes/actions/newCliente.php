<?php
include("../../config/conexion.php");
function died($error) {
        echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";
        echo "Detalle de los errores.<br /><br />";
        echo $error."<br /><br />";
        echo "Por favor corrija estos errores e inténtelo de nuevo.<br /><br />";
        die();
    }

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  if (mysqli_connect_errno()) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  else {
/*
    if(!isset($_POST['cliNombre']) ||
       !isset($_POST['cliApellido']) ||
       !isset($_POST['cliNss']) ||
       !isset($_POST['cliRfc']) ||
       !isset($_POST['cliFechNacimiento']) ||
       !isset($_POST['cliNivAcademico']) ||

       //Datos de direccion
       !isset($_POST['cliCalle']) ||
       !isset($_POST['cliColonia']) ||
       !isset($_POST['cliNumExt']) ||
       !isset($_POST['cliNumInt']) ||
       !isset($_POST['cliCP']) ||
       !isset($_POST['cliAntiguedad']) ||
       !isset($_POST['cliTipo']) ||

       //Datos de localizacion
       !isset($_POST['cliTelCasa']) ||
       !isset($_POST['cliTelMovil']) ||
       !isset($_POST['cliEmail']) ||

       //Informacion Laboral
       !isset($_POST['cliEmpresaNombre']) ||
       !isset($_POST['cliEmpresaPuesto']) ||
       !isset($_POST['cliEmpresaCalle']) ||
       !isset($_POST['cliEmpresaColonia']) ||
       !isset($_POST['cliEmpresaNExt']) ||
       !isset($_POST['cliEmpresaNInt']) ||
       !isset($_POST['cliEmpresaCP']) ||
       !isset($_POST['cliEmpresaAnt']) ||
       !isset($_POST['cliEmpresaTel']) ||
       !isset($_POST['cliEmpresaTelExt'])) {
          died('Lo sentimos pero parece haber un problema con los datos enviados.');
        }
*/
    //--Datos de usuario
    $cli_nom= $_POST['cliNombre'];
    $cli_ape = $_POST['cliApellido'];
    $cli_nss = $_POST['cliNss'];
    $cli_rfc = $_POST['cliRfc'];
    $cli_fechNac = $_POST['cliFechNacimiento'];
    $cli_NivAca = $_POST['cliNivAcademico'];

    //--Datos Direccion
    $cli_cal = $_POST['cliCalle'];
    $cli_col = $_POST['cliColonia'];
    $cli_NExt = $_POST['cliNumExt'];
    $cli_NInt = $_POST['cliNumInt'];
    $cli_cp = $_POST['cliCP'];
    $cli_ant = $_POST['cliAntiguedad'];
    $cli_tipo = $_POST['cliTipo'];

    //--Datos Localizacion
    $cli_tel = $_POST['cliTelCasa'];
    $cli_mov = $_POST['cliTelMovil'];
    $cli_ema = $_POST['cliEmail'];

    //--Informacion laboral
    $cli_EmpNom = $_POST['cliEmpresaNombre'];
    $cli_EmpPue = $_POST['cliEmpresaPuesto'];
    $cli_EmpCal = $_POST['cliEmpresaCalle'];
    $cli_EmpCol = $_POST['cliEmpresaColonia'];
    $cli_EmpNExt = $_POST['cliEmpresaNExt'];
    $cli_EmpNInt = $_POST['cliEmpresaNInt'];
    $cli_EmpCp = $_POST['cliEmpresaCP'];
    $cli_EmpAnt = $_POST['cliEmpresaAnt'];
    $cli_EmpTel = $_POST['cliEmpresaTel'];
    $cli_EmpTelExt = $_POST['cliEmpresaTelExt'];

    $error_message = "Error";
    $_SESSION['nombre'] = "otro";


    //--Insertar nuevo usuario
    $ref = "Cli-".substr($cli_nom,0, 2).substr($cli_ape, 0, 2)."-".substr($cli_fechNac,0, 4);
    $result = mysqli_query($con,"INSERT INTO Clientes(usuCreacion,ref,nombre,apellido,fechNacimiento,nss)
      VALUES('".$_SESSION['nombre']."', '".$ref."', '".$cli_nom."', '".$cli_ape."',".$cli_fechNac.", '".$cli_nss."'  );");
    $id = mysqli_insert_id($con);


    //--Insertar direccion de usuario
    $result = mysqli_query($con,"INSERT INTO DatosLocalizacion(usuCreacion,pk_Cliente,calle,numInt,numExt,colonia,cp,tipVivienda,antVivienda,telCasa,telMovil,email)
      VALUES('".$_SESSION['nombre']."', ".$id.", '".$cli_cal."', '".$cli_NIxt."', '".$cli_NExt."', '".$cli_col."', '".$cli_cp."', '".$cli_tipo."','".$cli_ant."','".$cli_tel."', '".$cli_mov."' ,'".$cli_ema."'  );");

    //--Insertar información Dependientes
    //--Datos de Dependientes
    $cli_NDepen = $_POST['cliNDependientes'];
    $count = 0;
    while ($count < $cli_NDepen) {
      $cli_DepenPar= $_POST['cliContactoParentezco'.$count];
      $cli_DepenEda = $_POST['cliContactoEdad'.$count];
      $result = mysqli_query($con,"INSERT INTO Contactos(usuCreacion,pk_Cliente,parentezco,edad)
        VALUES('".$_SESSION['nombre']."', ".$id.", '".$cli_DepenPar."', '".$cli_DepenEda."');");
      $count++;
    }

    //--Insertar informacion laboral
    $result = mysqli_query($con,"INSERT INTO DatosLaboral(usuCreacion,pk_Cliente,nivAcademico,nomEmpresa,pueEmpresa,antEmpresa,calle,numInt,numExt,colonia,cp,ext,tel)
      VALUES('".$_SESSION['nombre']."',".$id.", '".$cli_NivAca."', '".$cli_EmpNom."', '".$cli_EmpPue."', '".$cli_EmpAnt."', ".$cli_EmpCal."',".$cli_EmpNInt."',
      ".$cli_EmpNExt."',".$cli_EmpCol."',".$cli_EmpCp."',".$cli_EmpTelExt."',".$cli_EmpTel." )");

  }
?>
