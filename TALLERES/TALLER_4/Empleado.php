<?php

class Empleado
{
    public $nombre;
    public $id;
    public $salarioBase;

    //Constructor de la clase
    public function __construct($nombre, $id, $salarioBase)
    {
        $this->setNombre($nombre);
        $this->setId($id);
        $this->setSalarioBase($salarioBase);
    }
    //Metodos SET
    public function setNombre($nombre)
    {
        $this->nombre = (trim($nombre));
    }

    public function setId($id)
    {
        //Regla de negocio: El formato del ID es en mayusculas cerradas
        $this->id = strtoupper(trim($id));
    }

    public function setSalarioBase($salarioBase)
    {
        $this->salarioBase = doubleval($salarioBase);
    }
    //Mestodos GET
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSalarioBase()
    {
        return $this->salarioBase;
    }


    //Funcion para verificar
    public function obtenerInformacion()
    {
        return "Nombre: {$this->getNombre()} ID: {$this->getId()} Salario Base: {$this->getSalarioBase()}";
    }
}
