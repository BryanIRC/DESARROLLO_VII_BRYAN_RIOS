<?php
require_once 'Empleado.php';
require_once 'Evaluable.php';
class Gerente extends Empleado implements Evaluable
{
    private $departamento;
    //Constructor de la clase
    public function __construct($departamento)
    {
        $this->setDepartamento($departamento);
    }

    //Metodos SET
    public function setDepartamento($departamento)
    {
        $this->departamento = (trim($departamento));
    }
    //Mestodos GET
    public function getDepartamento()
    {
        return $this->departamento;
    }
    public function asignarBono() {}
    public function evaluarDesempenio()
    {
        return "Evaluando a: " . parent::obtenerInformacion() . ", Lenguaje: {$this->departamento}";
    }
}
