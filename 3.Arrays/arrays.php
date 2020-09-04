<?php

$tecnologias = ["PHP", "JAVA", "PYTHON", "GO"];

//No se puede mostrar los datos con (echo, print)
print_r($tecnologias);

echo "<br>";

echo $tecnologias[2];
$tecnologias[1] = "JAVASCRIPT";

echo "<br>";
print_r($tecnologias);
echo "<hr>";

$persona = ["nombre" => "Pedro", "edad" => 40, "ci" => "2374823"];
$persona2 = ["nombre" => "Ana", "edad" => 30, "ci" => "65464565"];
$p3 = ["nombre" => "Oscar", "edad" => 20, "ci" => "2454565"];

print_r($persona);
echo "<hr>";
$lista_personas = [$persona, $persona2, $p3];

print_r($lista_personas);


//Lista de tecnologias 
// 1. Frontend (Cliente)
// 2. Backend (Servidor)
// 3. Base de Datos (Servidor)

?>

<table border="1">
    <tr>
        <td>NOMBRE</td>
        <td>EDAD</td>
        <td>CI</td>
    </tr>
    <?php for($i = 0; $i < 3; $i++) { ?>
    <tr>
        <td><?php echo $lista_personas[$i]["nombre"] ?></td>
        <td> <?= $lista_personas[$i]["edad"] ?> </td>
        <td><?= $lista_personas[$i]["ci"] ?></td>
    </tr>
    <?php  } ?>

</table>

