<?php include("../config/bloque.php"); ?>
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Inicio</a>
    </li>
    <li class="breadcrumb-item active">Clientes</li>
  </ol>


  <h1>Clientes</h1>
  <hr>
  <form role="form-horizontal" method="post" id="formCliente" autocomplete="off" name="ListClient">
    <h5>Filtros</h5>
    <div class="form-group row ">
      <div class="form-group col-md-6">
        <p class="sMargen">Nombre cliente</p>
        <input class="form-control" type="text" name="filNombre" value="" placeholder="Nombre">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-2">
        <p class="sMargen">Estatus</p>
        <select class="form-control" name="filEstatus" value="Estatus">
          <option value="Sin completar">Sin completar</option>
          <option value="Sin perfil">Sin perfil</option>
          <option value="Sin documentos">Sin documentos</option>
          <option value="Completado">Completado</option>
        </select>
      </div>
    </div>
    <?php include("templates/tableClientes.php"); ?>
  </form>
