<?php
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellidos"]) and !empty($_POST["rut"]) and !empty($_POST["usuario"]) and !empty($_POST["contraseña"]) and !empty($_POST["sexo"]) and !empty($_POST["fecha_nacimiento"])){
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $rut=$_POST["rut"];
        $usuario=$_POST["usuario"];
        $contraseña=$_POST["contraseña"];
        $sexo=$_POST["sexo"];
        $fecha_nacimiento=$_POST["fecha_nacimiento"];
        $sql=$conexion->query("INSERT INTO formulario (nombre,apellidos,rut,usuario,contraseña,sexo,fecha_nacimiento)VALUES('$nombre','$apellidos','$rut','$usuario','$contraseña','$sexo','$fecha_nacimiento')");
        if ($sql==1) {
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
            
        } else {
            echo '<div class="alert alert-danger">Error al registrar</div>';
        }
        
    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }

}
?>
