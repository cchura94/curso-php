<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTTP (GET, POST)</title>
</head>
<body>
    <h2>Metodo GET</h2>
    <p>Cargar, Listar, Mostrar datos, Mostrar información</p>
    <hr>
    <?php
        if($_GET){
            $numero1 = $_GET['n1'];
            $numero2 = $_GET['n2'];
            echo $numero1 + $numero2;
        }

        if($_POST){
            $numero1 = $_POST['n1'];
            $numero2 = $_POST['n2'];
            echo $numero1 + $numero2;
        }
        
    ?>
    <hr>

    <form action="" method="get">
        <input type="number" placeholder="Introduzca n1" name="n1">
        <br>
        <input type="number" placeholder="Introduzca n2" name="n2">
        <br>
        <input type="submit" value="+"> 
        <input type="reset">
    </form>


    <h2>Metodo POST</h2>
    <p>Enviar datos al servidor, Guardar un recurso</p>

    <form action="" method="post">
        <input type="number" placeholder="Introduzca n1" name="n1">
        <br>
        <input type="number" placeholder="Introduzca n2" name="n2">
        <br>
        <input type="submit" value="+"> 
        <input type="reset">
    </form>
    


</body>
</html>