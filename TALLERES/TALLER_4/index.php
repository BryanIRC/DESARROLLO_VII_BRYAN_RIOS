<!DOCTYPE html>
<html lang="en">
<?php include 'Empresa.php';
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
            $objEmpresa = new Empresa();
            $objEmpresa->agregarDesarrollador("Bryan Rios", 61, 2500.00, "PHP", "Senior", 0.00);
            $objEmpresa->obtenerDesarrollador();
            ?>
        </main>
        <?php
        include 'includes-taller4/footer.php'
        ?>
    </div>
</body>

</html>