<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo-Celular-Login.cl</title>
    <link rel="stylesheet" href="../css/stylesloginphp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body> 
    <div class="login">
      <form id="form" method="post" class="form">
        <h2>Bienvenido a Mundo celular</h2>    
        <?php
        include("conexion.php");
        include("controlador-crud.php");
        ?>   
        <input type="text" name="usuario" placeholder="Nombre de usuario" maxlength="16">
        <input type="password" name="password" placeholder="Contraseña">

        <input class="submit" name="btningresar" type="submit" value="Iniciar">
        
    </form>
  </div>
</body>
</html>