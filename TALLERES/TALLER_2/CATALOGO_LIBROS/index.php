<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/styles.css">
    <link rel="icon" href="img/ico.png" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat'>
    <title>Catálogo de Libros</title>
</head>
<?php
include_once 'includes/funciones.php'
?>

<body>
    <div id="Container">
        <?php
        include 'includes/header.php'
        ?>
        <main>
            <?php
            $libros = obtenerLibros();
            foreach ($libros as $libro) {
                mostrarDetallesLibro($libro);
            }
            ?>
        </main>
        <?php
        include 'includes/footer.php'
        ?>
    </div>
</body>

</html>