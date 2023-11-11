<?php
session_start();
if(!empty($_POST["btningresar"])){
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div class="alert alert-danger">Alguno de los campos esta vacio</div>';

    } else {
        $usuario=$_POST["usuario"];
        $contraseña=$_POST["password"];
        $sql=$conexion->query("SELECT * FROM usuario WHERE usuario='$usuario' and clave='$contraseña'");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["usuario"]=$datos->usuario;
            header("location:principal.php");
        } else {
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }
    }
}
?>