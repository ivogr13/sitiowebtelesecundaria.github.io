<?php
    
    $conexion=mysqli_connect('localhost','root','','escuela') or die("Error de conexión");
    $idAlumno=$_GET['idAlumno'];
    $query = "DELETE FROM  `alumnos` where(`idAlumno`='$idAlumno')";
    $result = mysqli_query($conexion,$query);
    if($result){
        header('location: index.php');
        }

    ?>

   

    


