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

  <form role="form-horizontal">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-md-6">
            <p class="sMargen">Nombre cliente</p>
            <input class="form-control" type="text" name="cliNombre" value="" placeholder="Nombre">
          </div>
          <div class="col-md-6">
            <p class="sMargen">Apellido cliente</p>
            <input class="form-control" type="text" name="cliApellido" value="" placeholder="Apellido">
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="form-group row">
      <div class="form-group col-md-2">
        <p class="sMargen">NSS</p>
        <input class="form-control" type="text" name="cliNss" value="" placeholder="NSS">
      </div>
      <div class="form-group col-md-2">
        <p class="sMargen">RFC</p>
        <input class="form-control" type="text" name="cliRfc" value="" placeholder="RFC">
      </div>
      <div class="form-group col-md-2">
        <p class="sMargen">Fecha Nacimiento</p>
        <input class="form-control" type="date" name="cliFechNacimiento" value="" placeholder="Fecha Nacimiento">
      </div>
      <div class="form-group col-md-6">
        <p class="sMargen">Nivel Académico</p>
        <input class="form-control" type="text" name="cliNivAcademico" value="" placeholder="Nivel Académico">
      </div>
    </div>

    <br>
    <h3>Dirección</h3>
    <hr>
    <div class="form-group row">
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name="cliCalle" value="" placeholder="Calle">
      </div>
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name="cliColonia" value="" placeholder="Colonia">
      </div>
      <div class="form-group col-md-1">
        <input class="form-control" type="text" name="cliNumExt" value="" placeholder="# Interior">
      </div>
      <div class="form-group col-md-1">
        <input class="form-control" type="text" name="cliNumInt" value="" placeholder="# Exterior">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name="cliCP" value="" placeholder="C.P.">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name="cliAntiguedad" value="" placeholder="Antigüedad">
      </div>
      <div class="form-group col-md-6">
        <datalist id="listVivienda">
          <option value="Familiar">
          <option value="Propia">
          <option value="Rentada">
          </datalist>
        <input class="form-control" list="listVivienda" type="text" name="cliTipo" value="" placeholder="Tipo vivienda">
      </div>
    </div>

    <br>

    <h3>Datos de localización</h3>
    <hr>
    <div class="form-group row">
      <div class="form-group col-md-2">
        <p class="sMargen">Teléfono Fijo</p>
        <input class="form-control" type="text" name="cliTelCasa" value="" placeholder="Fijo">
      </div>
      <div class="form-group col-md-2">
        <p class="sMargen">Teléfono Móvil</p>
        <input class="form-control" type="text" name="cliTelMovil" value="" placeholder="Móvil">
      </div>
      <div class="form-group col-md-2">
        <p class="sMargen">Correo</p>
        <input class="form-control" type="email" name="cliTelMovil" value="" placeholder="email">
      </div>
    </div>
    <br>
    <h3>Información Complementaria</h3>
    <hr>
    <div class="form-group row">
      <div class="form-group col-md-2">
        <p class="sMargen">Dependientes Económicos</p>
        <input class="form-control" type="text" name="cliNDependientes" value="" placeholder="Dependientes" onchange="CDependientes(this.value)">
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
      </div>
      <div class="form-group col-md-4">
        <p class="sMargen">Puesto en la Empresa</p>
        <input class="form-control" type="text" name="cliEmpresaPuesto" value="" placeholder="Puesto que desempeña">
      </div>
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name="cliEmpresaCalle" value="" placeholder="Calle">
      </div>
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name="cliEmpresaCalle" value="" placeholder="Colonia">
      </div>
      <div class="form-group col-md-1">
        <input class="form-control" type="text" name="cliEmpresaNExt" value="" placeholder="# Exterior">
      </div>
      <div class="form-group col-md-1">
        <input class="form-control" type="text" name="cliEmpresaNInt" value="" placeholder="# Interior">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name="cliEmpresaCP" value="" placeholder="CP">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name="cliEmpresaAnt" value="" placeholder="antiguedad">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name="cliEmpresaTel" value="" placeholder="Teléfono">
      </div>
      <div class="form-group col-md-1">
        <input class="form-control" type="text" name="cliEmpresaTelExt" value="" placeholder="Extensión">
      </div>
    </div>

    <br>
    <h3>Referencias</h3>
    <hr>

    <h5>Familiar 1</h5>
    <div class="form-group row">
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name='CliRef1Nombre' value="" placeholder="Nombre">
      </div>
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name='CliRef1Apellido' value="" placeholder="Apellido">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name='CliRef1Tel' value="" placeholder="Teléfono Fijo">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name='CliRef1Mov' value="" placeholder="Teléfono Móvil">
      </div>
    </div>
    <h5>Familiar 2</h5>
    <div class="form-group row">
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name='CliRef2Nombre' value="" placeholder="Nombre">
      </div>
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name='CliRef2Apellido' value="" placeholder="Apellido">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name='CliRef2Tel' value="" placeholder="Teléfono Fijo">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name='CliRef2Mov' value="" placeholder="Teléfono Móvil">
      </div>
    </div>
    <hr>
    <h5>Amigo 1</h5>
    <div class="form-group row">
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name='CliRef3Nombre' value="" placeholder="Nombre">
      </div>
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name='CliRef3Apellido' value="" placeholder="Apellido">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name='CliRef3Tel' value="" placeholder="Teléfono Fijo">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name='CliRef3Mov' value="" placeholder="Teléfono Móvil">
      </div>
    </div>
    <h5>Amigo 2</h5>
    <div class="form-group row">
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name='CliRef4Nombre' value="" placeholder="Nombre">
      </div>
      <div class="form-group col-md-6">
        <input class="form-control" type="text" name='CliRef4Apellido' value="" placeholder="Apellido">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name='CliRef4Tel' value="" placeholder="Teléfono Fijo">
      </div>
      <div class="form-group col-md-2">
        <input class="form-control" type="text" name='CliRef4Mov' value="" placeholder="Teléfono Móvil">
      </div>
    </div>

    <div class="form-group row">
      <div class="form-group col-md-10"></div>
      <div class="form-group col-md-2">
        <button class="btn btn-primary" type="button" name="btnGuardar" style="align:right;">Guardar</button>
        <button class="btn btn-success" type="button" name="btnSiguiente">Avanzar</button>
      </div>
    </div>

  </form>


<!--
  <a class="btn btn-primary" href="#" id="toggleNavPosition">Toggle Fixed/Static Navbar</a>
  <a class="btn btn-primary" href="#" id="toggleNavColor">Toggle Navbar Color</a>
   Blank div to give the page height to preview the fixed vs. static navbar-->
</div>
