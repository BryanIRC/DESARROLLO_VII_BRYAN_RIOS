<?php
function contar_palabras($texto)
{
    $nPalabras = explode(" ", $texto);
    return count($nPalabras);
}
function contar_vocales($texto)
{
    $nVocales = 0;
    if (strpos($texto, "a"))
        $nVocales++;
    return $nVocales;
}
function invertir_palabras($texto)
{
    $array_txt = explode(" ", $texto);
    $nuevoTexto = "";
    for ($i = count($array_txt) - 1; $i >= 0; $i--)
        $nuevoTexto .= $array_txt[$i] . " ";
    return trim($nuevoTexto);
}
