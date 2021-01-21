<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario registro</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="form-register">
    <form action="registrar.php" method="post">
        <h4>Formulario Registro</h4>
        <p>Nombre completo</p><input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
        <p>Nombre de usuario</p><input class="controls" type="varchar" name="nombreusuario" id="nombreusuario" placeholder="Ingrese su nombre de usuario">
        <p>Contraseña</p><input class="controls" vtype="varchar" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña">
        <p><a href="/pagina/login/index.php"> ¿Ya tienes cuenta? Iniciar sesión</a></p>
        <input class="botons" type="submit" value="Registrar">
        <p><a href="/pagina/login/index.php"class="btn">Regresar</a></p>

    </section>
      
               </body>
               </html>