<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!--FRAMEWORK BOOSTRAP-5-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--flexboxgrid-->
    <link rel="stylesheet" href="css/flexboxgrid.min.css">
    <!--css Principal-->
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>

<section>
  <div class="espacio container-fluid">
    <div class="row">
      <div class="granpantalla">
        <div class="cuadrofrom">
          <div>
            <form id="formulario" method="post">
              <div>
                <h1>Ingreso.</h1>
              </div>
              <div class="padding-inputs">
                <label for="">Usuario</label>
                <input class="inputformprin" type="text" id="usuario" name="usuario" required="true" maxlength="10" minlength="3">
              </div>
              <div class="padding-inputs">
                <label for="">password</label>
                <input class="inputformprin" type="password" id="password" name="password" required="true" maxlength="10" minlength="3">
              </div>
              <div class="cuadro-bot padding-inputs">
                <button class="btn-envio-acceso" type="submit">Ingresar</button>
              </div>
              <div id="alerta"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<script src="js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>