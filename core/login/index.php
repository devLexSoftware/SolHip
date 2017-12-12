<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="../../recursos/bootstrap/css/bootstrap.min.css">
    <script src="../../recursos/jq/jquery.min.js"></script>
    <script src="../../recursos/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="row align-items-center justify-content-center" style="text-align:center;">
        <div class="col-md-6">
            <h1 class="login-title">Login</h1>
            <form class="form" action="actions/loginS.php" method="post">
              <input type="text" class="form-control" placeholder="Usuario" name="user" required autofocus>
              <br>
              <input type="password" class="form-control" placeholder="Password" name="pass" required>
              <br>
              <button class="btn btn-primary" type="submit" >Entrar</button>
              <br>
              <a href="reiniciar.php" class="pull-right need-help">Olvide contraseña</a>
              <span class="clearfix"></span>
            </form>
        </div>
      </div>
    </div
  </body>
</html>
