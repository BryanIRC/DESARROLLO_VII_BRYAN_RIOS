<?php
function sanitizarNombre($nombre)
{
    trim($nombre);
    htmlspecialchars($nombre);
    return $nombre;
}

function sanitizarEmail($email)
{
    htmlspecialchars($email);
    return trim($email);
}

function sanitizarFechaNacimiento($fecha)
{
    htmlspecialchars($fecha);
    return trim($fecha);
}

function sanitizarSitioWeb($sitioWeb)
{
    return filter_var(trim($sitioWeb), FILTER_SANITIZE_URL);
}

function sanitizarGenero($genero)
{
    htmlspecialchars($genero);
    return trim($genero);
}

function sanitizarIntereses($intereses)
{
    return array_map(function ($interes) {
        htmlspecialchars($interes);
        return trim($interes);
    }, $intereses);
}

function sanitizarComentarios($comentarios)
{
    return htmlspecialchars(trim($comentarios), ENT_QUOTES, 'UTF-8');
}
