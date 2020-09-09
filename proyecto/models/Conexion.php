<?php

class Conexion
{
    private $host = "127.0.0.1";
    private $port = 3306;
    private $userbd = "root";
    private $nombrebd = "curso_php";

    private $con;

    public function __construct() {
        $this->con = new mysqli($this->host, $this->userbd, '',$this->nombrebd);
    }

    public function consultaSimple($sql)
	{
		$this->con->query($sql);
	}

	public function consultaRetorno($sql)
	{
		$datos = $this->con->query($sql);
		return $datos;
	}    
}

$c = new Conexion();