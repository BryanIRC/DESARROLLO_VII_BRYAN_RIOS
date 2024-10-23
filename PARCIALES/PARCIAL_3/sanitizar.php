<?php
function sanitizarUsuario($usuario)
{
    trim($usuario);
    htmlspecialchars($usuario);
    strtolower($usuario);
    return $usuario;
}
