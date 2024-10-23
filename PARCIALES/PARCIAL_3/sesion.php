<?php
require_once 'sanitizar.php';
require_once 'validar.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
        $usuario = sanitizarUsuario($_POST['usuario']);
        $contrasena = $_POST['contrasena'];
    }

    if (!validarUsuario($usuario) || !validarContrasena($contrasena)) {
        echo "Credenciales invalidas";
    }
}
