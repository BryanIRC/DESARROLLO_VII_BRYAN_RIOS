<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="styles/styles-login.css">
    <link rel="icon" href="" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>

    <div id="Container">
        <?php
        include 'includes/header.php'
        ?>
        <main>
            <form action="pages/inicio.php" method="POST" enctype="multipart/form-data">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required minlength="3" class="txt"><br><br>

                <label for="fechaNacimiento">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required minlength="5" class="txt"><br><br>
                <div id="Buttons">
                    <input type="submit" value="Enviar" class="btn">
                    <input type="reset" value="Limpiar" class="btn">
                </div>
            </form>
        </main>
        <?php
        include 'includes/footer.php'
        ?>
    </div>
</body>

</html>