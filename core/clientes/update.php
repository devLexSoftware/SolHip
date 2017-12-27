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

      $result = mysqli_query($con,"SELECT * FROM Clientes WHERE ref = '".$ref."'");
      $elemento = mysqli_fetch_array($result);
    }
 ?>

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Inicio</a>
    </li>
    <li class="breadcrumb-item active">Clientes</li>
  </ol>


  <h1>Actualizar registro</h1>
  <hr>
  <h4> <?php echo $elemento['nombre']." ".$elemento['apellido'] ; ?></h4>
  <form role="form-horizontal" method="post" id="formCliente" autocomplete="off" name="Cliente">
    <div class="form-group row ">
      <div class="form-group col-md-6">
        <p class="sMargen">Nombre cliente</p>
        <input class="form-control" type="text" name="cliNombre" value="<?php echo $elemento['nombre']; ?>" placeholder="Nombre">
        <span id="error" class="invalid-feedback"></span>
      </div>

      <div class="form-group col-md-6">
        <p class="sMargen">Apellido cliente</p>
        <input class="form-control" type="text" name="cliApellido" value="<?php echo $elemento['apellido']; ?>" placeholder="Apellido">
        <span id="error" class="invalid-feedback"></span>
      </div>
    </div>

    <br>
    <div class="form-group row ">

      <div class="form-group col-md-2">
        <p class="sMargen">NSS</p>
        <input class="form-control" type="text" name="cliNss" value="<?php echo $elemento['nss']; ?>" placeholder="NSS">
        <span id="error" class="invalid-feedback"></span>
      </div>

      <div class="form-group col-md-2">
        <p class="sMargen">RFC</p>
        <input class="form-control" type="text" name="cliRfc" value="<?php echo $elemento['rfc']; ?>" placeholder="RFC">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-2">
        <p class="sMargen">Fecha Nacimiento</p>
        <input class="form-control" type="date" name="cliFechNacimiento" value="<?php echo $elemento['fechNacimiento']; ?>" placeholder="Fecha Nacimiento">
      </div>
      <div class="form-group col-md-6">
        <p class="sMargen">Nivel Académico</p>
        <input class="form-control" type="text" name="cliNivAcademico" value="<?php echo $elemento['apellido']; ?>" placeholder="Nivel Académico">
        <span id="error" class="invalid-feedback"></span>
      </div>
    </div>


  </form>
</div>
