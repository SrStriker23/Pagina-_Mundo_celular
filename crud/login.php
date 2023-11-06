<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo-Celular-Login.cl</title>
    <link rel="stylesheet" href="../css/stylesloginphp.css">
</head>
<body>
    <?php
    include("conexion.php");
    include("controlador.php");
     ?>    
    <div class="login">
  <form id="form" method="post" class="form">
    <h2>Bienvenido a Mundo celular</h2>
    <input type="text" name="usuario" placeholder="Nombre de usuario" maxlength="16">
    <input type="password" name="password" placeholder="Contraseña">
    <input class="submit" name="btningresar" type="submit" value="Iniciar">
</form>
</div>
</body>
</html>