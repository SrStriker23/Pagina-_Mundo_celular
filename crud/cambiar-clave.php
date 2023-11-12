<?php
// Conexión a la base de datos (reemplaza estos valores con los tuyos)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mundo_celular";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar la dirección de correo electrónico proporcionada por el usuario
    $email = $_POST['email'];

    // Verificar si el correo electrónico existe en la base de datos
    $sql = "SELECT * FROM formulario WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // El correo electrónico existe en la base de datos

        // Mostrar un formulario para que el usuario ingrese la nueva contraseña
        echo '<form method="post" action="cambiar-clave2.php">';
        echo 'Nueva Contraseña: <input type="password" name="contraseña" required><br>';
        echo '<input type="hidden" name="email" value="' . $email . '">';
        echo '<input type="submit" name="btnclave" value="Guardar Nueva Contraseña">';
        echo '</form>';

    } else {
        echo "El correo electrónico proporcionado no existe en la base de datos.";
    }
}


$conn->close();
?>
