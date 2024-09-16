<?php
require_once 'Gerente.php';
require_once 'Desarrollador.php';
require_once 'Archivo.php';

class Empresa
{
    public $objDesarrollador;
    public $objGerente;
    public $objArchivo;
    public function agregarDesarrollador($nombre, $id, $salarioBase, $lenguaje, $nivel, $bono)
    {
        $this->objArchivo = new Archivo();
        $this->objDesarrollador = new Desarrollador($nombre, $id, $salarioBase, $lenguaje, $nivel, $bono);
        $this->objDesarrollador->setNombre($nombre);
        $this->objDesarrollador->setId($id);
        $this->objDesarrollador->setSalarioBase($salarioBase);
        $this->objDesarrollador->setLenguaje($lenguaje);
        $this->objDesarrollador->setNivel($nivel);
        $this->objDesarrollador->setBono($bono);
        $this->objArchivo->GuardarRegistro($this->objDesarrollador);
    }
    public function agregarGerente($nombre, $id, $salarioBase, $departamento)
    {
        $this->objGerente = new Gerente($nombre, $id, $salarioBase, $departamento);
        $this->objGerente->setNombre($nombre);
        $this->objGerente->setId($id);
        $this->objGerente->setSalarioBase($salarioBase);
        $this->objGerente->setDepartamento($departamento);
        $this->objArchivo->GuardarRegistro($this->objGerente);
    }
    public function ListarEmpleados()
    {
        $objArchivo = new Archivo();
        $empleados = $objArchivo->ListarRegistros();
        echo "<table><tr><th>ID</th><th>Nombre</th><th>Tipo</th><th>Salario Base</th></tr>";
        foreach ($empleados as $empleado) {
            echo "<tr><td>$empleado[id]</td><td>$empleado[nombre]</td><td>$empleado[tipo]</td><td>$empleado[salarioBase]</td></tr>";
        }
        echo "</table>";
    }
    public function CalcularNomina()
    {
        $nomina = 0;
        $this->objArchivo = new Archivo();
        $empleados = $this->objArchivo->ListarRegistros();
        foreach ($empleados as $empleado)
            $nomina += $empleado["salarioBase"];
        return $nomina;
    }
    public function evaluarEmpleado($criterio)
    {
        return is_array($criterio) ?
            $this->objGerente->evaluarDesempenio($criterio) :
            $this->objDesarrollador->evaluarDesempenio($criterio);
    }
    public function CalcularBono($evaluacion)
    {
        $bono = $this->objGerente->asignarBono($this->objDesarrollador->getSalarioBase(), $evaluacion);
        $this->objDesarrollador->setBono($bono);
        return $this->objDesarrollador->getBono();
    }
}
