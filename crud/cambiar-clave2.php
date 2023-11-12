<?php
// Conexión a la base de datos (reemplaza estos valores con los tuyos)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mundo_celular";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contraseña'])) {
    // Procesar el formulario de nueva contraseña

    // Recuperar el correo electrónico y la nueva contraseña del formulario
    $email = $_POST['email'];
    $nuevaContrasena = $_POST['contraseña'];

    // Hash de la nueva contraseña
    $hashedPassword = password_hash($nuevaContrasena, PASSWORD_DEFAULT);

    // Actualizar la contraseña en la base de datos
    $updateSql = "UPDATE formulario SET contraseña = '$nuevaContrasena' WHERE email = '$email'";
    if ($conn->query($updateSql) === TRUE) {
        echo "La contraseña se ha actualizado con éxito.";
        header("location:login.php");
    } else {
        echo "Error al actualizar la contraseña: " . $conn->error;
    }
}
?>