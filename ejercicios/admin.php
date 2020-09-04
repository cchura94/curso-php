<?php

$c = $_POST['correo'];
$pass = $_POST['clave'];

if($c == "cristian@gmail.com"){
    if($pass == "cristian.123"){
        echo "Bienvenido " . $c;
    }else{
        //echo "La cotraseña esta Incorrecta";
         header("Location: ./login.php?error=La cotraseña esta Incorrecta");
    }

}else{
    //echo "El correo es Incorrecto";
    header("Location: ./login.php?error=El correo es Incorrecto");
}


$persona = ["nombre" => "Pedro", "edad" => 40, "ci" => "2374823"];
$persona2 = ["nombre" => "Ana", "edad" => 30, "ci" => "65464565"];
$p3 = ["nombre" => "Oscar", "edad" => 20, "ci" => "2454565"];

echo "<hr>";
$lista_personas = [$persona, $persona2, $p3];

//  
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


