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
  <div style="width:100%; height:40px;" >
    <img src="../../../recursos/img/Bancos/hsbc-logo.png" style="width:28%; float:left;" />
  </div>
    <p style="text-align: right"> Número de Folio: _______________________</p>

    <p style="text-align: right"> Lugar y Fecha: _________________________________________________</p>

    <br>
    <br>
    <h5 style= "text-align: left;"> Autorización de Consulta Monitoreo de Información Credicitia </h5>

    <p style="text-align: justify ">
    Autorizo (autorizamos) a HSBC Mexico, S.A. Institucion de Banca Multiple Grupo Financiero HSBC y a los demas miembros del Grupo
    Financiero HSBC para que directamente o por conducto de cualquier sociedad de informacion crediticia solicite(n), obtenga(n) o
    verifiquen(n) en el presente o en el futuro y cuantas veces considere necesario toda la informacion crediticia de el(los) suscrito(s).
    </p>

    <p style="text-align: justify">
    Hago (hacemos) constar que tengo (tenemos) pleno conocimiento de la naturaleza y alcance de la informacion que se solicitara, del
    uso que se hara de tal informacion y del hecho de que se podran realizar consultas periodicas de mi (nuestro) historial crediticio,
    conforme a lo establecido en el articulo 28 de la ley para regular las sociedades de informacion crediticia a que deban sujetarse las
    mencionadas sociedades de informacion crediticia. La presente autorizacion tendra el caracter de irrevocable y se encontrara vigente
    por tres años o por mas tiempo mientras exista una relacion juridica entre ambos o existan obligaciones pendientes a mi (nuestro)
    cargo derivada de dicha (s) operacion (es).
    </p>

    <br>
    <br>
    <br>

    <label>_______________________________________________</label>
    <br><br>
    <label>NOMBRE Y FIRMA TITULAR </label>

    <br>
    <br>
    <br>
    <br>
    <br>

    <label>_______________________________________________</label>
    <br><br>
    <label> NOMBRE Y FIRMA DEL ACREDITADO </label>


    <br>
    <br>
    <br>
    <br>
    <br>

    <h4 style= "text-align: left;"> Autorización de tratamiento de datos personales </h4>

    <p style="text-align: justify">
    De conformidad con la Ley Federal de Proteccion de Datos Personales en Posesion de Particulares y su Reglamento, confirmo haber
    leido y estar de acuerdo con el Aviso de Provacidad de HSBC Mexico, S.A., por lo que autorizo el tratamiento y transferencia de mis
    datos personales, incluyendo mis datos patrimoniales, financieros y sensibles, a HSBC Mexico, S.A. para los fines descritos en su
    Aviso de provacidad antes referido. Asimismo, estoy enterado que puedo consultar el Aviso de Privacidad integral en
    www.hsbc.com.mx o en cualquierda de sus sucursales.
    </p>

    <br>
    <br>
    <br>
    <br>

    <label> ___________________________________ </label>
    <br><br>
    <label> NOMBRE Y FIRMA TITULAR </label>

    <br>
    <br>
    <br>
    <br>
    <br>

    <label>_______________________________________________</label>
    <br><br>
    <label> NOMBRE Y FIRMA DEL COASCREDITADO </label>
</page>
