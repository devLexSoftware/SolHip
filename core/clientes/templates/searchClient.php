 <?php include("../config/bloque.php");

 $filtro = $_GET['ref'];

 ?>

 <div class="container-fluid">

   <!-- Breadcrumbs-->
   <ol class="breadcrumb">
     <li class="breadcrumb-item">
       <a href="#">Inicio</a>
     </li>
     <li class="breadcrumb-item active">Búsqueda</li>
   </ol>

   <h1>Resultados de la búsqueda</h1>
   <hr>

   <form role="form-horizontal" method="post" id="formCliente" autocomplete="off" name="ListClient">
     <h5>Clientes</h5>
     <div class="" id="divTableClientes">

       <?php $var="tableClientes.php?filtro=$filtro&or=bus";include($var); ?>
     </div>
  </form>
