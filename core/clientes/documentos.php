<?php include("../config/bloque.php");

  define('DB_SERVER','localhost');
  define('DB_NAME','SolHip');
  define('DB_USER','root');
  define('DB_PASS','q1w2e3');

  session_start();
  $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    if (mysqli_connect_errno()) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    else {
      $ref = $_GET['ref'];
      $result = mysqli_query($con,"SELECT Clientes.nombre, Clientes.apellido, Clientes.nss, Clientes.rfc, Clientes.fechNacimiento, Clientes.nivAcademico, Clientes.nDependientes,
          DatosLocalizacion.calle, DatosLocalizacion.colonia, DatosLocalizacion.numInt, DatosLocalizacion.numExt, DatosLocalizacion.cp, DatosLocalizacion.antVivienda, DatosLocalizacion.tipVivienda,
          DatosLocalizacion.telCasa, DatosLocalizacion.telMovil, DatosLocalizacion.email
          FROM Clientes INNER JOIN DatosLocalizacion ON Clientes.id = DatosLocalizacion.pk_Cliente WHERE ref = '".$ref."'");
      $elemento = mysqli_fetch_array($result);

      $result2 = mysqli_query($con, "SELECT DatosLaboral.nomEmpresa, DatosLaboral.pueEmpresa, DatosLaboral.antEmpresa, DatosLaboral.calle, DatosLaboral.numInt, DatosLaboral.numExt, DatosLaboral.colonia, DatosLaboral.cp, DatosLaboral.ext, DatosLaboral.tel
          FROM DatosLaboral INNER JOIN Clientes ON DatosLaboral.pk_Cliente = Clientes.id Where Clientes.ref = '".$ref."'");
      $elemento2 = mysqli_fetch_array($result2);

      $result3 = mysqli_query($con, "SELECT PerfilCliente.nombre, PerfilCliente.banco, PerfilCliente.credito, PerfilCliente.salario
          FROM PerfilCliente INNER JOIN Clientes ON PerfilCliente.pk_Cliente = Clientes.id WHERE Clientes.ref = '".$ref."'");
      $elemento3 = mysqli_fetch_array($result3);

    }
 ?>

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.php">Inicio</a>
    </li>
    <li class="breadcrumb-item">
      <a href="index.php?p=lcs">Lista</a>
    </li>
    <li class="breadcrumb-item active">Cliente</li>
  </ol>


  <h1>Perfil del cliente</h1>
  <hr>
  <h4> <?php echo $elemento['nombre']." ".$elemento['apellido'] ; ?></h4>
  <h5> <?php echo $elemento3['nombre']; ?></h5>
  <form role="form-horizontal" action="../clientes/actions/documentCliente.php?ref=<?php echo $ref; ?>" method="post" id="formCliente" autocomplete="off" name="ClienteDocuments" >
    <?php include("templates/documentClientes.php"); ?>
    <br>
    <div class="form-group row">
      <div class="form-group col-md-10"></div>
      <div class="form-group col-md-2">
        <button class="btn btn-success" type="submit" name="btnGuardar" id="btnGuardar" >Guardar</button>
        <button class="btn btn-info" type="submit" name="btnImprimir" id="btnImprimir" >Imprimir</button>
      </div>
    </div>
  </form>
