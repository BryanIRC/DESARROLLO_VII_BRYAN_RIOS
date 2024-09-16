<!DOCTYPE html>
<html lang="en">
<?php
require_once 'Empresa.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 minimum-scale=1.0">
    <link rel="stylesheet" href="./includes-taller4/styles.css">
    <link rel="icon" href="../SRC/ico.png" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>Sistema de Gestión de Empleados</title>
</head>

<body>
    <div id="Taller4-Container">
        <?php
        include 'includes-taller4/header.php'
        ?>
        <main>
            <?php
            $objArchivo = new Archivo();
            $objEmpresa = new Empresa();
            echo "Se agrega un desarrollador<br>";
            $empleado = $objEmpresa->agregarDesarrollador("Bryan Rios", "ASQW234", 2500.00, "PHP", "Senior", 0.00);
            echo "<br>Desempeño del Desarrollador: " . $objEmpresa->evaluarEmpleado(85) . "<br>";
            echo "Se agrega un Gerente<br>";
            $empleado = $objEmpresa->agregarGerente("Nayrb Soir", "qwrety", 3500.00, "Operaciones");
            echo "<br>Desempeño del Gerente: " . $objEmpresa->evaluarEmpleado([85, 95, 90, 115, 91]) . "<br>";
            echo "Se listan los Empleados <br>";
            $objEmpresa->ListarEmpleados();
            echo "<br>Nomina total: " . $objEmpresa->CalcularNomina() . "<br>";
            echo "<br>Bono Correspondiente: " . $objEmpresa->CalcularBono(85) . "<br><br>";
            ?>
        </main>
        <?php
        include 'includes-taller4/footer.php'
        ?>
    </div>
</body>

</html>