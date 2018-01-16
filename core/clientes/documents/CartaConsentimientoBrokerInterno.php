<?php
    $count2_modal = 0;
    $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
      if (mysqli_connect_errno()) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      }
      else {
        $ref = $_GET['ref'];
        $count = 1;
        $count2 = 1;
        $result = mysqli_query($con,"SELECT find FROM Clientes WHERE Clientes.ref = '".$ref."'");
        $elemento = mysqli_fetch_array($result);
  }

?>

<page backtop="5mm" backbottom="0mm" backleft="10mm" backright="12mm">

    <label style="font-size: 98px"> FSG </label>
    <label style="font-size: 40px"> Broker </label>

    <h5 style="text-align: center"> CONSENTIMIENTO PARA EL TRÁMINTE DE CRÉDITO HIPOTECARIO </h5>

    <p style="text-align:right;"> (Ciudad)___________, a _____ de  ____________de 20___</p>
    <br>

    <p style="text-align: justify"> (Nombre del Solicitante) <i style="font-size:12px;"><b><?php echo $elemento['find'];?></b></i> por mi propio derecho,
    autorizo en este acto a FSG Broker, S.A. de C.V. (en adelante "El Agente Hipotecario") a referir mis
    datos de contacto a HSBC y comparto mi informacion confidencial con el mismo para que en mi
    nombre y representacion lleve a cabo todos los actos necesarios ante HSBC Mexico SA, Institucion
    de Banca Multiple Grupo Financiero HSBC (en adelante "El Banco"), para tramitar el otorgamiento
    de un credito o prestamo con los terminos y condiciones establecidos por el Banco.
    </p>

    <p style="text-align: justify">
    La presente autorizacion es unica y exclusivamente para tramitar el otrogamiento de un credito o
    prestamo, por lo que no comprende la realizacion de actos juridicos para efectos de dominio o
    administracion de bienes, de manera que el Agente Hipotecario se obliga a:
    </p>

    <p style="text-align: justify; padding:0 0 0 10mm">
    - Recibir la documentacion e informacion del suscrito y entregarla al Banco.
    </p>

    <p style="text-align: justify; padding:0 0 0 10mm">
    - Estar en comunicacion con el Banco, con el objeto de recabar y entregar toda la
    documentacion e informacion necesaria para el tramite antes indicado.
    </p>

    <p style="text-align: justify; padding:0 0 0 10mm">
    - Dar seguiminto al tramite de otrogamiento del credito o prestamo ante el banco.
    </p>

    <p style="text-align: justify; padding:0 0 0 10mm">
    - Obtener y comunicar el resultado de mi evaluacion como posible acreditado del Banco,
    incluyendo la informacion inherente a la consulta en las Sociedades de Informacion
    Crediticia que el Banco efectue.
    </p>

    <p style="text-align: justify; padding:0 0 0 10mm">
    - Llevar a cabo cualquier servicio relacionado con el tramite del otorgamiento del credito o
    prestamo con el Banco.
      </p>

    <p style="text-align: justify">
    Ademas confirmo haber sido informado del Aviso de Provacidad del Banco.
    </p>

    <p style="text-align: justify">
    El Agente Hipotecario en ningun momento esta o estara autorizado para firmar en mi
    representacion contratos, convenios, cartas o cualquier otro documento, mediante los cuales se
    generen obligaciones a mi cargo frente al Banco.
    </p>

    <p style="text-align: justify">
    En este acto manifiesto y acepto que toda la documentacion e informacion que proporcione al
    Agente Hipotecario sera verdadera, precisa, estara vigente, no estara modificada o alterada, no
    contendra errores que sean de mi conocimiento y no conducira al error, de manera que reconozco
    y estoy al tanto de las sanciones administrativas y penales aplicables a las personas que presentan
    declaraciones en falso.
    </p>

    <p style="text-align: justify">
    Atentamente,
    </p>


    <p style="text-align: center">
    ______________________________
    </p>
    <p style="text-align: center">
    Nombre y Firma
    </p>

    <br>
    <br>
    <p style="text-align: center">
    Testigos:
    </p>
    <p style="margin:10mm 0 0 0; font-size:14px;"> INTERNAL</p>
</page>
