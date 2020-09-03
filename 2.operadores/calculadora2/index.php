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

    <form action="./procesar.php" method="get">
        <input type="number" placeholder="Introduzca n1" name="n1" required>
        <br>
        <input type="number" placeholder="Introduzca n2" name="n2" required>
        <br>
        <input type="submit" value="+"> 
        <input type="reset">
    </form>


    <h2>Metodo POST</h2>
    <p>Enviar datos al servidor, Guardar un recurso</p>

    <form action="./procesar.php" method="post">
        <input type="number" placeholder="Introduzca n1" name="n1" required>
        <br>
        <input type="number" placeholder="Introduzca n2" name="n2" required>
        <br>
        <input type="submit" value="+"> 
        <input type="reset">
    </form>
    


</body>
</html>