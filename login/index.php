<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <form action="validar.php" method="post">
    <h1 class="animate__animated animate__backInLeft">INICIO DE SESIÓN</h1>
    <p>Usuario <input type="text" placeholder="Ingrese su usuario" name="usuario"></p>
    <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="contraseña"></p>
    <input type="submit" value="Ingresar">
    <a href="/pagina/registro/registro.php" class="btn">Registrarse</a>
    <a href="/pagina/" class="btn">Regresar</a>

    </form>
</body>
</html>