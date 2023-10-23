<?php
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellidos"]) and !empty($_POST["rut"]) and !empty($_POST["direccion"]) and !empty($_POST["sexo"]) and !empty($_POST["fecha_nacimiento"]) and !empty($_POST["edad"])){
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $rut=$_POST["rut"];
        $direccion=$_POST["direccion"];
        $sexo=$_POST["sexo"];
        $fecha_nacimiento=$_POST["fecha_nacimiento"];
        $edad=$_POST["edad"];

        $sql=$conexion->query("INSERT INTO formulario(nombre,apellidos,rut,direccion,sexo,fecha_nacimiento,edad)VALUES('$nombre','$apellidos','$rut','$direccion','$sexo','$fecha_nacimiento','$edad')");
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
