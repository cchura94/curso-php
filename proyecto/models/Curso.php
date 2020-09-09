<?php

require("./Conexion.php");

class Curso extends Conexion
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

    public function crear()
    {
        $c = new Conexion;
        $c->consultaSimple("insert into usuarios (email, clave) values ('cchura.cpc@gmail.com', 'cristian123')");
        
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($t){
        $this->titulo = $t;
    }

}

$c1 = new Curso("Curso PHP", "php.jpg", "php");
$c1->mostrar();
$c1->setTitulo("Curso Laravel");
$c1->getTitulo();
$c1->crear();

