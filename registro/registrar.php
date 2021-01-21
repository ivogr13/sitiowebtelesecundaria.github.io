<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $conexion=mysqli_connect('localhost','root','','login');


    $nombre=$_POST['nombre'];
    $nombreusuario=$_POST['nombreusuario'];
    $contraseña=$_POST['contraseña'];
    
    $consulta="INSERT INTO `usuarios` (`id`, `Nombreusuario`, `usuario`, `contraseña`)
     VALUES ('', '$nombre', '$nombreusuario', '$contraseña'); ";
       $resultado=mysqli_query($conexion,$consulta) or die("Error de registro");

        echo "Su registro se ha realizado exitosamente";

       mysqli_close($conexion);
?>
<link rel="stylesheet" href="css/estilos.css">
 <body>
 <a href="/pagina/login/index.php" class="btn">Regresar</a>
 </body>

