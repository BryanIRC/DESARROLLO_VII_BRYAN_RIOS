<?php
require_once 'Empleado.php';
require_once 'Evaluable.php';
class Gerente extends Empleado implements Evaluable
{
    private $departamento;
    //Constructor de la clase
    public function __construct($nombre, $id, $salarioBase, $departamento)
    {
        parent::__construct($nombre, $id, $salarioBase);
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
    public function asignarBono($salario, $evaluacion)
    {
        return ($salario * 1.5 * $evaluacion / 100);
    }
    public function evaluarDesempenio($porc_Gerencial)
    {
        $promedio = array_sum($porc_Gerencial) / count($porc_Gerencial);
        echo "Se evalúa el Gerente";
        switch (true) {
            case ($promedio > 100):
                $evaluacion = "Superó las Expectativas";
                break;
            case ($promedio >= 95):
                $evaluacion = "Excelente";
                break;
            case ($promedio >= 90):
                $evaluacion = "Buena";
                break;
            case ($promedio >= 80):
                $evaluacion = "Regular";
                break;
            default:
                $evaluacion = "No cumpló";
        }
        return $evaluacion;
    }
}
