<?php
session_start();
if(!empty($_POST["btningresar"])){
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div>Alguno de los campos esta vacio</div>';

    } else {
        $usuario=$_POST["usuario"];
        $clave=$_POST["password"];
        $sql=$conexion->query("SELECT * FROM usuario WHERE usuario='$usuario' and clave='$clave'");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["usuario"]=$datos->usuario;
            header("location:../index.php");
        } else {
            echo '<div>acceso denegado</div>';
        }
    }
}
?>