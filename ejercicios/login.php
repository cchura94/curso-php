<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ingresar</title>
  </head>
  <body>
    <h1>Inicio de Sesion</h1>

    <?php
        if($_GET){
            echo "<h5 style='color:#f00'>" . $_GET['error'] ."</h5>";
        }
    ?>
    <form action="./admin.php" method="POST">
      <label for="c">Ingrese su Correo:</label>
      <input type="email" name="correo" />
      <br />
      <label for="p">Ingrese su Contraseña:</label>
      <input type="password" name="clave" />
      <br />
      <input type="submit" value="Ingresar" />
    </form>
  </body>
</html>
