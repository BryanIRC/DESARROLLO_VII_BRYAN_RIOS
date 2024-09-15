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

    public function obtenerInformacion()
    {
        echo "<table>
        <tr>
            <th scope=col>Npmbre</th>
            <th scope=col>ID</th>
            <th scope=col>Salario Base</th>
            <th scope=col>Lenguaje</th>
            <th scope=col>Nivel</th>
            <th scope=col>Bono Asignado</th>
        </tr>
        <tr>
        <td>{$this->getNombre()}</td>
        <td>{$this->getId()}</td>
        <td>{$this->getSalarioBase()}</td>";
    }
}
