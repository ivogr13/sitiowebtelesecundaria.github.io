<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $conexion=mysqli_connect('localhost','root','','escuela');


    $nombre=$_POST['nombre'];
    $grado=$_POST['grado'];
    $grupo=$_POST['grupo'];
    $correo= $_POST['correo'];
    $telefono=$_POST['telefono'];
    $direccion= $_POST['direccion'];
    
    $consulta="INSERT INTO `alumnos` (`idAlumno`, `nombre`, `grado`, `grupo`, `correo`, `telefono`, `direccion`)
     VALUES ('', '$nombre', '$grado', '$grupo', '$correo', '$telefono', '$direccion'); ";
       $resultado=mysqli_query($conexion,$consulta) or die("Error de registro");
       if($resultado){
        header('location: index.php');
        }

       mysqli_close($conexion);
?>
 