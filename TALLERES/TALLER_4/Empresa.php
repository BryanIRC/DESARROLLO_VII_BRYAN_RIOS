<?php
require_once 'Gerente.php';
require_once 'Desarrollador.php';

class Empresa
{
    public $objEmpleado;
    public function agregarDesarrollador($nombre, $id, $salarioBase, $lenguaje, $nivel, $bono)
    {
        $this->objEmpleado = new Desarrollador($nombre, $id, $salarioBase, $lenguaje, $nivel, $bono);
        $this->objEmpleado->setNombre($nombre);
        $this->objEmpleado->setId($id);
        $this->objEmpleado->setSalarioBase($salarioBase);
        $this->objEmpleado->setLenguaje($lenguaje);
        $this->objEmpleado->setNivel($nivel);
        $this->objEmpleado->setBono($bono);
    }
    public function obtenerDesarrollador()
    {
        if ($this->objEmpleado !== null) {
            $this->objEmpleado->obtenerInformacion();
        } else {
            echo "No se ha registrado ningún desarrollador.";
        }
    }
}
