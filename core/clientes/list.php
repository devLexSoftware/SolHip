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
        <input class="form-control" type="text" name="filNombre" id="idfilNombre" value="" placeholder="Todos" onchange="filtrarListaClientes()">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-2">
        <p class="sMargen">Estatus</p>
        <select class="form-control" name="filEstatus" id="idfilEstatus" value="Todos" onchange="filtrarListaClientes()">
          <option value="Todos">Todos</option>
          <option value="Sin completar">Sin completar</option>
          <option value="Sin perfil">Sin perfil</option>
          <option value="Sin documentos">Sin documentos</option>
          <option value="Completado">Completado</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <p class="sMargen">Banco</p>
        <select class="form-control" name="filBanco" id="idfilBanco" value="Todos" onchange="filtrarListaClientes()">
          <option value="Todos">Todos</option>
          <option value="Banamex">Banamex</option>
          <option value="Bancomer">Bancomer</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <p class="sMargen">Perfil</p>
        <select class="form-control" name="filPerfil" id="idfilPerfil" value="Todos" onchange="filtrarListaClientes()">
          <option value="Todos">Todos</option>
          <option value="Hipotecario Salario Fijo">Hipotecario Salario Fijo</option>
          <option value="Hipotecario en Confinanciamiento">Hipotecario en Confinanciamiento</option>
        </select>
      </div>
    </div>

    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Clientes</div>
      <div class="card-body">
        <div class="table-responsive" id="divTableClientes">
          <?php include("templates/tableClientes.php"); ?>
        </div>
      </div>
    </div>



  </form>

<script type="text/javascript">
    $(document).ready(function() {
      $('#tableList').DataTable();
    } );

</script>
