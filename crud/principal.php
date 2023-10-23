<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD php</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">

</head>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("Estas seguro de eliminar el registro");
            return respuesta
        }
    </script>
    <div class="container my-5">
        <h1 class="text-center bg-white">CRUD CON PHP</h1>
    </div>
    <div class="container mt-5">
        <?php
        include("conexion.php");
        include("eliminar.php");
        ?>
        <div class="row">
            <div class="col-md-3">
                <form class="bg-white" method="POST">
                    <?php 
                    include("conexion.php");
                    include("registro.php");
                    ?>
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                    <input type="text" class="form-control mb-3" name="rut" placeholder="Rut">
                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                    <input type="radio" class="form-check-input" name="sexo" value="Hombre"> Hombre<br>
                    <input type="radio" class="form-check-input" name="sexo" value="Mujer"> Mujer<br>
                    <input type="radio" class="form-check-input" name="sexo" value="Otro"> Otro
                    <input type="date" max="2024-01-01" class="form-control mb-3" name="fecha_nacimiento" placeholder="Fecha de nacimiento">
                    <input type="number" min="18" max="120" class="form-control mb-3" name="edad" placeholder="Edad">
                    <div class="d-flex justify-content-center align-items-center"><button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button></div>
                </form>
            </div>
            <div class="col-md-9">
                <table class="table bg-white">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Rut</th>
                            <th>Direccion</th>
                            <th>Sexo</th>
                            <th>Fecha de nacimiento</th>
                            <th>Edad</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("conexion.php");
                        $sql=$conexion->query("SELECT * FROM formulario");
                        while($datos=$sql->fetch_object()){
                        ?>
                        <tr>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->apellidos ?></td>
                            <td><?= $datos->rut ?></td>
                            <td><?= $datos->direccion ?></td>
                            <td><?= $datos->sexo ?></td>
                            <td><?= $datos->fecha_nacimiento ?></td>
                            <td><?= $datos->edad ?></td>
                            <th><a href="pagina-modificar.php?rut=<?=$datos->rut?>" class="btn btn-info">Editar</a></th>
                            <th><a onclick="return eliminar()" href="principal.php?rut=<?=$datos->rut?>" class="btn btn-danger">Eliminar</a></th>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>