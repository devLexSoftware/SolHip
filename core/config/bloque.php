<?php
  session_start();
  if ($_SESSION['valida'] != 'true') {
    session_destroy();
    header("location:../../index.php");
    exit();
  }
  else {
     $hora = $_SESSION["uacceso"];
     $tiempo = time();
     $ttranscurrido = $tiempo - $hora;

     if($ttranscurrido >= 600){
       session_destroy();
       header("location:../../index.php");
     }else {
       $_SESSION["uacceso"] = $tiempo;
     }
  }
?>
