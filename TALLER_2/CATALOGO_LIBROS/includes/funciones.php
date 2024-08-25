<?php
function obtenerLibros()
{
    $libros = [
        [
            "titulo" => "Hush, Hush",
            "autor" => "Becca Fitzpatrick",
            "anio_publicacion" => 2009,
            "genero" => "Desarrollo personal",
            "descripcion" => "Habla del amor que se desarrolla entre Nora Grey (quien también da la perspectiva desde la cual se narra toda la historia) y Patch Cipriano (un ángel caído)."
        ],
        [
            "titulo" => "Los 7 hábitos de la gente altamente efectiva",
            "autor" => "Stephen R. Covey",
            "anio_publicacion" => 1989,
            "genero" => "Novela",
            "descripcion" => "Lecciones magistrales sobre el cambio personal."
        ],
        [
            "titulo" => "Genealogía de la moral",
            "autor" => "Friedrich Nietzsche",
            "anio_publicacion" => 2021,
            "genero" => "Desarrollo presonal",
            "descripcion" => "Cuestionamiento de la moral que se ha inculcado a lo largo de los siglos y que transmuta para manipularnos y privarnos de la verdadera libertad."
        ],
        [
            "titulo" => "El fabricante de milagros",
            "autor" => "Ilya Carrera",
            "anio_publicacion" => 2014,
            "genero" => "Desarrollo personal",
            "descripcion" => "Reflexiones que inspiran tu fe para creer que lo imposible esta hecho."
        ],
        [
            "titulo" => "Organizaciones coherentes",
            "autor" => "Ricardo Matamala Señor",
            "anio_publicacion" => 2018,
            "genero" => "Desarrollo empresarial",
            "descripcion" => "Mirada sistematica y alineada de los elementos imprescindibles para el exito de una empresa y el verdadero liderazgo."
        ],
        [
            "titulo" => "Clean Code",
            "autor" => "Robert C. Martin",
            "anio_publicacion" => 2009,
            "genero" => "Programacion",
            "descripcion" => "Manual de estilo para el desarrollo agil de software."
        ]
    ];
    usort($libros, 'validarTitulo');
    return $libros;
}
function mostrarDetallesLibro($libro)
{
    echo "
    <table>
        <tr>
            <td>Titulo: </td><td>$libro[titulo]</td>
        </tr>
        <tr>
            <td>Autor: </td><td>$libro[autor]</td>
        </tr>
        <tr>
            <td>Año de publicacion: </td><td>$libro[anio_publicacion]</td>
        </tr>
        <tr>
            <td>Genero: </td><td>$libro[genero]</td>
        </tr>
            <tr>
            <td>Descripcion: </td><td>$libro[descripcion]</td>
        </tr>
    </table>";
}
function validarTitulo($a, $b)
{
    return strcmp($a['titulo'], $b['titulo']);
}
