<?php
$conexion=mysqli_connect('localhost','root','','escuela');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo registro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="nuevo.php" method="post">
    <h1 class="text-center"><strong>Nuevo registro</strong></h1>
    <p>Nombre <input type="text" placeholder="Ingrese el nombre" name="nombre"></p>
    <p>Grado <input type="varchar" placeholder="Ingrese el grado" name="grado"></p>
    <p>Grupo <input type="text" placeholder="Ingrese el grupo" name="grupo"></p>
    <p>Correo <input type="varchar" placeholder="Ingrese el correo" name="correo"></p>
    <p>Teléfono <input type="bigint" placeholder="Ingrese el teléfono" name="telefono"></p>
    <p>Dirección <input type="varchar" placeholder="Ingrese la dirección" name="direccion"></p>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="index.php" class="btn1">REGRESAR</a>
    </form>
</body>
</html>