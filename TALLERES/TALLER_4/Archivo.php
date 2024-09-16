<?php
class Archivo
{
    private $ruta = 'data/empleados.json';
    public function GuardarRegistro($empleado)
    {
        $contenidoActual = $this->Leer();
        $nuevoRegistro = $this->Convertir($empleado);
        $contenidoActual[] = $nuevoRegistro;
        $this->Escribir($contenidoActual);
    }
    public function ListarRegistros()
    {
        return $this->Leer();
    }

    private function Leer()
    {
        if (file_exists($this->ruta)) {
            $data = file_get_contents($this->ruta);
            return json_decode($data, true);
        } else {
            return [];
        }
    }
    private function Escribir($contenido)
    {
        $data = json_encode($contenido, JSON_PRETTY_PRINT);
        file_put_contents($this->ruta, $data);
    }
    private function Convertir($objeto)
    {
        $tipo = get_class($objeto);
        $array = [
            'tipo' => $tipo,
            'nombre' => $objeto->getNombre(),
            'id' => $objeto->getId(),
            'salarioBase' => $objeto->getSalarioBase()
        ];
        if ($tipo == 'Desarrollador') {
            $array['lenguaje'] = $objeto->getLenguaje();
            $array['nivel'] = $objeto->getNivel();
            $array['bono'] = $objeto->getBono();
        } elseif ($tipo == 'Gerente') {
            $array['departamento'] = $objeto->getDepartamento();
        }
        return $array;
    }
}
