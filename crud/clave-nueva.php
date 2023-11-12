<?php
if(!empty($_POST["btnclave"])){
    if(!empty($_POST["email"])){

        $contraseña=$_POST["contraseña"];

        $sql=$conexion->query("UPDATE formulario SET contraseña='$contraseña' WHERE email='$email'");
        if ($sql==1) {
            header("location:login.php");
        } else {
            echo '<div class="alert alert-danger">Error al modificar</div>';
        }
    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
}
?>