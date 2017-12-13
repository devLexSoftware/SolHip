<?php
  include("../../config/conexion.php");
  $usuario = $_POST[user];
  $password = $_POST[pass];
  $_SESSION['valida'] = 'false';
  $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  if (mysqli_connect_errno()) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  else {
    $result = mysqli_query($con,"SELECT * FROM Usuarios WHERE usuario ='".$usuario."'");
    if($row = mysqli_fetch_array($result)){
      if($row['pass'] == $password){
        session_start();
        $_SESSION['valida'] = "true";
        $_SESSION['usuario'] = $usuario;
        $_SESSION['nombre'] = $row['nombre'] . " " . $row['apellido'];
        $_SESSION['tipo'] = $row['tipo'];
        $_SESSION['foto'] = $row['img'];
        header("location:../../templates/index.php");
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
  }
?>
