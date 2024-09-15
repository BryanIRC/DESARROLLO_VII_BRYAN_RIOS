<?php
require_once 'Empleado.php';
require_once 'Evaluable.php';
class Gerente extends Empleado implements Evaluable
{
    private $departamento;
    private $desempenio;
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
    public function setDesempenio($desempenio)
    {
        $this->desempenio = (trim($desempenio));
    }
    //Mestodos GET
    public function getDepartamento()
    {
        return $this->departamento;
    }
    public function getDesempenio()
    {
        $this->desempenio;
    }
    public function asignarBono() {}
    public function evaluarDesempenio($criterio)
    {
        return "Evaluando a: " . parent::obtenerInformacion() . ", Lenguaje: {$this->departamento}";
    }
}
