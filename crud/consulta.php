<?php
// CONEXIÓN A LA BASE DE DATOS
include("conexion.php");

// VALORES INICIALES
$tabla = "";
$query = "SELECT * FROM formulario";

// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BÚSQUEDA
if (isset($_POST['alumnos'])) {
    $q = $conexion->real_escape_string($_POST['alumnos']);
    $query = "SELECT * FROM formulario WHERE 
        nombre LIKE '%" . $q . "%' OR
        apellidos LIKE '%" . $q . "%' OR
        rut LIKE '%" . $q . "%' OR
        direccion LIKE '%" . $q . "%' OR
        sexo LIKE '%" . $q . "%' OR
        fecha_nacimiento LIKE '%" . $q . "%' OR
        edad LIKE '%" . $q . "%'";
}
$buscarformulario = $conexion->query($query);
if ($buscarformulario->num_rows > 0) {
    $tabla =
        '<table class="table">
        <tr class="bg-primary">
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Rut</td>
            <td>Direccion</td>
            <td>Sexo</td>
            <td>Fecha de nacimiento</td>
            <td>Edad</td>
        </tr>';
    while ($filaformulario = $buscarformulario->fetch_assoc()) {
        $tabla .=
            '<tr>
                <td>' . $filaformulario['nombre'] . '</td>
                <td>' . $filaformulario['apellidos'] . '</td>
                <td>' . $filaformulario['rut'] . '</td>
                <td>' . $filaformulario['direccion'] . '</td>
                <td>' . $filaformulario['sexo'] . '</td>
                <td>' . $filaformulario['fecha_nacimiento'] . '</td>
                <td>' . $filaformulario['edad'] . '</td>
            </tr>';
    }
    $tabla .= '</table>';
} else {
    $tabla = "No se encontraron coincidencias con sus criterios de búsqueda.";
}
echo $tabla;
?>