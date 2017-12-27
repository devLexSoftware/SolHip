<?php include("../config/bloque.php"); ?>
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Inicio</a>
    </li>
    <li class="breadcrumb-item active">Clientes</li>
  </ol>


  <h1>Nuevo registro</h1>
  <hr>

  <form role="form-horizontal" method="post" id="formCliente" autocomplete="off" name="Cliente">

    <div class="form-group row ">
      <div class="form-group col-md-6">
        <p class="sMargen">Nombre cliente</p>
        <input class="form-control" type="text" name="cliNombre" value="" placeholder="Nombre">
        <span id="error" class="invalid-feedback"></span>
      </div>

      <div class="form-group col-md-6">
        <p class="sMargen">Apellido cliente</p>
        <input class="form-control" type="text" name="cliApellido" value="" placeholder="Apellido">
        <span id="error" class="invalid-feedback"></span>
      </div>
    </div>

    <br>
    <div class="form-group row ">

      <div class="form-group col-md-2">
        <p class="sMargen">NSS</p>
        <input class="form-control" type="text" name="cliNss" value="" placeholder="NSS">
        <span id="error" class="invalid-feedback"></span>
      </div>

      <div class="form-group col-md-2">
        <p class="sMargen">RFC</p>
        <input class="form-control" type="text" name="cliRfc" value="" placeholder="RFC">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-2">
        <p class="sMargen">Fecha Nacimiento</p>
        <input class="form-control" type="date" name="cliFechNacimiento" value="" placeholder="Fecha Nacimiento">
      </div>
      <div class="form-group col-md-6">
        <p class="sMargen">Nivel Académico</p>
        <input class="form-control" type="text" name="cliNivAcademico" value="" placeholder="Nivel Académico">
        <span id="error" class="invalid-feedback"></span>
      </div>
    </div>

    <br>
    <h3>Dirección</h3>
    <hr>
    <div class="form-group row">
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name="cliCalle" value="" placeholder="Calle">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name="cliColonia" value="" placeholder="Colonia">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-1">
        <input class="form-control" type="text" name="cliNumExt" value="" placeholder="# Exterior">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-1">
        <input class="form-control" type="text" name="cliNumInt" value="" placeholder="# Interior">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name="cliCP" value="" placeholder="C.P.">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name="cliAntiguedad" value="" placeholder="Antigüedad">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-6">
        <select class="form-control" name="cliTipo" value="" placeholder="Tipo vivienda">
          <option value="Familiar">Familiar</option>
          <option value="Propia">Propia</option>
          <option value="Rentada">Rentada</option>
        </select>
      </div>
    </div>
    <br>

    <h3>Datos de localización</h3>
    <hr>
    <div class="form-group row">
      <div class="form-group col-md-2">
        <p class="sMargen">Teléfono Fijo</p>
        <input class="form-control" type="text" name="cliTelCasa" value="" placeholder="Fijo">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-2">
        <p class="sMargen">Teléfono Móvil</p>
        <input class="form-control" type="text" name="cliTelMovil" value="" placeholder="Móvil">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-2">
        <p class="sMargen">Correo</p>
        <input class="form-control" type="email" name="cliEmail" value="" placeholder="Email">
        <span id="error" class="invalid-feedback"></span>
      </div>
    </div>
    <br>
    <h3>Información Complementaria</h3>
    <hr>
    <div class="form-group row">
      <div class="form-group col-md-2">
        <p class="sMargen">Dependientes Económicos</p>
        <select class="form-control" name="cliNDependientes" value="0" placeholder="Dependientes" onchange="CDependientes(this.value)">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
        </select>
      </div>
    </div>

    <div id="divDependientes">
    </div>

    <br>
    <h3>Información Laboral</h3>
    <hr>
    <div class="form-group row">
      <div class="form-group col-md-8">
        <p class="sMargen">Nombre de la Empresa</p>
        <input class="form-control" type="text" name="cliEmpresaNombre" value="" placeholder="Nombre de la empresa">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-4">
        <p class="sMargen">Puesto en la Empresa</p>
        <input class="form-control" type="text" name="cliEmpresaPuesto" value="" placeholder="Puesto que desempeña">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name="cliEmpresaCalle" value="" placeholder="Calle">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name="cliEmpresaColonia" value="" placeholder="Colonia">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-1">
        <input class="form-control" type="text" name="cliEmpresaNExt" value="" placeholder="# Exterior">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-1">
        <input class="form-control" type="text" name="cliEmpresaNInt" value="" placeholder="# Interior">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="number" name="cliEmpresaCP" value="" placeholder="CP">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="number" name="cliEmpresaAnt" value="" placeholder="Tiempo en la empresa">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name="cliEmpresaTel" value="" placeholder="Teléfono">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-1">
        <input class="form-control" type="text" name="cliEmpresaTelExt" value="" placeholder="Extensión">
        <span id="error" class="invalid-feedback"></span>
      </div>
    </div>

    <br>
    <h3>Referencias</h3>
    <hr>

    <h5>Familiar 1</h5>
    <div class="form-group row">
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name='CliRefNombre0' value="" placeholder="Nombre">
      </div>
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name='CliRefApellido0' value="" placeholder="Apellido">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name='CliRefTel0' value="" placeholder="Teléfono Fijo">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name='CliRefMov0' value="" placeholder="Teléfono Móvil">
      </div>
    </div>
    <h5>Familiar 2</h5>
    <div class="form-group row">
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name='CliRefNombre1' value="" placeholder="Nombre">
      </div>
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name='CliRefApellido1' value="" placeholder="Apellido">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name='CliRefTel1' value="" placeholder="Teléfono Fijo">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name='CliRefMov1' value="" placeholder="Teléfono Móvil">
      </div>
    </div>
    <hr>
    <h5>Amigo 1</h5>
    <div class="form-group row">
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name='CliRefNombre2' value="" placeholder="Nombre">
      </div>
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name='CliRefApellido2' value="" placeholder="Apellido">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name='CliRefTel2' value="" placeholder="Teléfono Fijo">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name='CliRefMov2' value="" placeholder="Teléfono Móvil">
      </div>
    </div>
    <h5>Amigo 2</h5>
    <div class="form-group row">
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name='CliRefNombre3' value="" placeholder="Nombre">
      </div>
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name='CliRefApellido3' value="" placeholder="Apellido">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name='CliRefTel3' value="" placeholder="Teléfono Fijo">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name='CliRefMov3' value="" placeholder="Teléfono Móvil">
      </div>
    </div>

    <h3>Información para credito</h3>
    <hr>
    <div class="form-group row">
      <div class="form-group col-md-4">
        <p class="sMargen">Banco</p>
        <input class="form-control" type="text" name="cliBanco" value="" placeholder="Banco">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-2">
        <p class="sMargen">Monto de crédito</p>
        <input class="form-control" type="number" name="cliCredito" value="" placeholder="Crédito">
        <span id="error" class="invalid-feedback"></span>
      </div>
      <div class="form-group col-md-2">
        <p class="sMargen">Ingresos</p>
        <input class="form-control" type="number" name="cliIngresos" value="" placeholder="Ingresos">
        <span id="error" class="invalid-feedback"></span>
      </div>
    </div>
    <br>

    <div class="form-group row">
      <div class="form-group col-md-10"></div>
      <div class="form-group col-md-2">
        <button class="btn btn-success" type="submit" name="btnSiguiente">Avanzar</button>
      </div>
    </div>

  </form>


<!--
  <a class="btn btn-primary" href="#" id="toggleNavPosition">Toggle Fixed/Static Navbar</a>
  <a class="btn btn-primary" href="#" id="toggleNavColor">Toggle Navbar Color</a>
   Blank div to give the page height to preview the fixed vs. static navbar-->
</div>

    <script src="../../recursos/js/CliGeneral.js"></script>
    <script src="../../recursos/js/CliValidate.js"></script>



<!--


-->
