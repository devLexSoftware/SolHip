<?php
  include("../../config/conexion.php");
  $usuario = $_POST[user1];
  $password = $_POST[pass1];
  $_SESSION['valida'] = 'false';
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  if (mysqli_connect_errno()) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  else {
    $result = mysqli_query($con,"SELECT * FROM Usuarios WHERE usuario ='".$usuario."'");
    if($row = mysqli_fetch_array($result)){
      if($row['pass'] == $password){
        $id = $row['id'];
        session_start();
        $_SESSION['valida'] = "true";
        $_SESSION['usuario'] = $usuario;
        $_SESSION['nombre'] = $row['nombre'] . " " . $row['apellido'];
        $_SESSION['tipo'] = $row['tipo'];
        $_SESSION['foto'] = $row['img'];
        $result = mysqli_query($con,"INSERT INTO RegistroUsuarios(pk_Usuarios,usuario, estatus) values (".$id.",'".$_SESSION['usuario']."', 1)");
        $_SESSION['pk'] = mysqli_insert_id($con);
        header("location:../../templates/index.php?p=in");
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
