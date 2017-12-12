<?php
  include("../../config/conexion.php");
  $usuario = $_POST[email];
  $password = $_POST[pass];
  /*$_SESSION['valida'] = 'false';
  $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  if (mysqli_connect_errno()) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  else {
    $result = mysqli_query($con,"SELECT * FROM USUARIO WHERE email ='".$usuario."'");
    if($row = mysqli_fetch_array($result)){
      if($row['pass'] == $password){
        session_start();
        $_SESSION['valida'] = "true";
        $_SESSION['usuario'] = $usuario;
        header("location:../../templates/estatica.php");
      }
      else {
        header("location:../index.php");

        exit();
      }
    }
    else {
      header("location:../index.php");
      exit();
    }
  }*/
  header("location:../../templates/index.php");
?>
