<?php
define('DB_SERVER','localhost');
define('DB_NAME','SolHip');
define('DB_USER','root');
define('DB_PASS','q1w2e3');
session_start();
/*function died($error) {
        echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";
        echo "Detalle de los errores.<br /><br />";
        echo $error."<br /><br />";
        echo "Por favor corrija estos errores e inténtelo de nuevo.<br /><br />";
        die();
    }*/

$count_modal = 0;
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  if (mysqli_connect_errno()) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  else {
    $result = mysqli_query($con,'SELECT Clientes.ref, Clientes.nombre, Clientes.apellido, Clientes.estado, PerfilCliente.banco, PerfilCliente.nombre as perfil, DatosLocalizacion.telCasa, DatosLocalizacion.telMovil, DatosLocalizacion.email FROM Clientes
              INNER JOIN PerfilCliente ON Clientes.id = PerfilCliente.pk_Cliente
              INNER JOIN DatosLocalizacion ON Clientes.id = DatosLocalizacion.pk_Cliente;');
    echo '
    <table class="table table-striped table-hover ">
      <thead>
        <tr class="info">
          <th>Cliente</th>
          <th>Estado</th>
          <th>Banco</th>
          <th>Perfil</th>
          <th>Localizacion</th>
          <th></th>
        </tr>
      </thead>
      <tbody> ';
      while($elemento = mysqli_fetch_array($result)){
        echo '
        <tr>
          <td>'.$elemento["nombre"].' '.$elemento["apellido"].'</td>
          <td>'.$elemento["estado"].'</td>
          <td>'.$elemento["banco"].'</td>
          <td>'.$elemento["perfil"].'</td>
          <td>
              <a data-toggle="modal" data-target="#exampleModal'.$count_modal.'">ver</a>
          </td>
          <div class="modal fade" id="exampleModal'.$count_modal.'">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel'.$count_modal.'">Información</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body row">
                  <div class="form-group col-md-3">
                    <p class="sMargen"><b>Número fijo</b></p>
                    <p class="sMargen">'.$elemento["telCasa"].'</p>
                  </div>
                  <div class="form-group col-md-4">
                    <p class="sMargen"><b>Número móvil</b></p>
                    <p class="sMargen">'.$elemento["telMovil"].'</p>
                  </div>
                  <div class="form-group col-md-4">
                    <p class="sMargen"><b>email</b></p>
                    <p class="sMargen">'.$elemento["email"].'</p>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" type="button" data-dismiss="modal">Aceptar</button>
                </div>
              </div>
            </div>
          </div>
          <td><a href="../templates/index.php?p=cu&ref='.$elemento["ref"].'">Ir al registro</a></td>
        </tr>
        ';
      }
      echo '
      </tbody>
    </table>
    ';

  }
  ?>
