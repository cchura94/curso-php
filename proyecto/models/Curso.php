<?php

class Curso 
{
    // atributos
    private $titulo;
    private $imagen;
    private $detalle;
    //constructor
    public function __construct($t, $img, $det) {
        $this->titulo = $t;
        $this->imagen = $img;
        $this->detalle = $det;
    }

    //metodos
    public function mostrar(){
        echo "Titulo: $this->titulo , Detalle: $this->detalle";
    }

}

$c1 = new Curso("Curso PHP", "php.jpg", "php");
$c1->mostrar();

