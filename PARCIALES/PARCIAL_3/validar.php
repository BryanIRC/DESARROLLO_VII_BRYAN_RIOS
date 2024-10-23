<?php
$credenciales = [
    ["usuario" => "bryan", "contrasena" => "qwe123", "rol" => "estudiante", "id" => "e1"],
    ["usuario" => "bryan", "contrasena" => "qwe123", "rol" => "estudiante", "id" => "e2"],
    ["usuario" => "bryan", "contrasena" => "qwe123", "rol" => "estudiante", "id" => "e3"],
    ["usuario" => "profe", "contrasena" => "zxc456", "rol" => "profesor"]
];

function validarUsuario($usuario)
{
    return !empty($usuario) && strlen($usuario) >= 3;
}
function validarContrasena($contrasena)
{
    return !empty($contrasena) && strlen($contrasena) >= 5;
}
