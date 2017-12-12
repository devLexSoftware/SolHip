<?php
  session_start();
  if ($_SESSION['valida'] != 'true') {    
    header("location:../login/index.php");
    exit();
  }
?>
