<?php
  include("../../config/conexion.php");
  session_start();
  $message="";
  $captcha = true;

  $usuario = $_POST[user1];
  $password = $_POST[pass1];
  $_SESSION['valida'] = 'false';


  error_reporting(E_ALL);
  ini_set('display_errors', '1');

  if(count($_POST)>0 && isset($_POST["captcha_code"]) && $_POST["captcha_code"]!=$_SESSION["captcha_code"]) {
    $captcha = false;
    $message = "Introduzca el código de Captcha correcto";
  }


  $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  if (mysqli_connect_errno()) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  else {
    $ip = $_SERVER['REMOTE_ADDR'];
    $result = mysqli_query($con,"SELECT count(ip) AS failed_login_attempt FROM failed_login WHERE ip = '$ip' AND fecha BETWEEN DATE_SUB( NOW() , INTERVAL 1 DAY ) AND NOW()");
    $row = mysqli_fetch_array($result);
    $failed_login_attempt = $row['failed_login_attempt'];


    if(count($_POST)>0 && $captcha == true) {
      $result = mysqli_query($con,"SELECT * FROM Usuarios WHERE usuario ='".$usuario."'");
      if($row = mysqli_fetch_array($result)){
        if($row['pass'] == $password){
          $id = $row['id'];
          session_start();
          $_SESSION['valida'] = "true";
          $_SESSION['usuario'] = $usuario;
          $_SESSION['nombre'] = $row['nombre'];
          $_SESSION['tipo'] = $row['tipo'];
          $_SESSION['foto'] = $row['img'];
          $result = mysqli_query($con,"INSERT INTO RegistroUsuarios(pk_Usuarios,usuario, estatus) values (".$id.",'".$_SESSION['usuario']."', 1)");
          $_SESSION['pk'] = mysqli_insert_id($con);
      	  $result = mysqli_query($con,"DELETE FROM failed_login WHERE ip_address = '$ip'");
            header("location:../../core/templates/index.php?p=in");
    	} } else {
    		$message = "¡Usuario o contraseña invalido!";
    		if ($failed_login_attempt < 3) {
    			  $result = mysqli_query($con,"INSERT INTO failed_login (ip,fecha) VALUES ('$ip', NOW())");
    		} else {
    			$message = "Ha intentado más de 3 intentos no válidos. Introduzca el código de captcha.";
    		}
          header("location:../index.php");
            exit();
    	}
    }


  /*  $result = mysqli_query($con,"SELECT * FROM Usuarios WHERE usuario ='".$usuario."'");
    if($row = mysqli_fetch_array($result)){
      if($row['pass'] == $password){
        $id = $row['id'];
        session_start();
        $_SESSION['valida'] = "true";
        $_SESSION['usuario'] = $usuario;
        $_SESSION['nombre'] = $row['nombre'];
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

<input name="captcha_code" type="text">

    }*/
  }
?>
