<?php
require_once 'Empleado.php';
require_once 'Evaluable.php';
class Desarrollador extends Empleado implements Evaluable
{
    private $lenguaje;
    private $nivel;
    private $bono;

    public function __construct($nombre, $id, $salarioBase, $lenguaje, $nivel, $bono)
    {
        parent::__construct($nombre, $id, $salarioBase);
        $this->setLenguaje($lenguaje);
        $this->setNivel($nivel);
        $this->setBono($bono);
    }
    //Metodos SET
    public function setLenguaje($lenguaje)
    {
        $this->lenguaje = (trim($lenguaje));
    }
    public function setNivel($nivel)
    {
        $this->nivel = (trim($nivel));
    }
    public function setBono($bono)
    {
        $this->bono = (doubleval($bono));
    }
    //Mestodos GET
    public function getLenguaje()
    {
        return $this->lenguaje;
    }
    public function getNivel()
    {
        return $this->nivel;
    }
    public function getBono()
    {
        return $this->bono;
    }

    public function evaluarDesempenio($criterio)
    {
        return "Evaluando desarrollador en " . $this->lenguaje . " a nivel " . $this->nivel;
    }
    public function obtenerInformacion()
    {
        echo parent::obtenerInformacion() .
            "
        <td>{$this->getLenguaje()}</td>
        <td>{$this->getNivel()}</td>
        <td>{$this->getBono()}</td></tr></table>";
    }
}
