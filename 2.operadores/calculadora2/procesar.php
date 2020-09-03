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