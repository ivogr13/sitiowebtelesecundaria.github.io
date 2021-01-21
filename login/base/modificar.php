<?php
    $conexion=mysqli_connect('localhost','root','','escuela');

    $idAlumno = $_GET['idAlumno'];
    $result = mysqli_query($conexion,"SELECT * FROM `alumnos` where `idAlumno` = '$idAlumno'");
    $mostrar = mysqli_fetch_assoc($result);
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre=$_POST['nombre'];
        $grado=$_POST['grado'];
        $grupo=$_POST['grupo'];
        $correo= $_POST['correo'];
        $telefono=$_POST['telefono'];
        $direccion= $_POST['direccion'];
        $result = mysqli_query($conexion,"UPDATE `alumnos` SET `nombre` = '$nombre',
        `grado` = '$grado', `grupo` = '$grupo', `correo` = '$correo', `telefono` = '$telefono', 
        `direccion` = '$direccion' WHERE `alumnos`.`idAlumno` = $idAlumno");
        echo "Registro exitoso";

        if($result){
        header('location: index.php');
        }
    }

 ?>

<?php
    ?>
    <!doctype html>
<html lang="es">
  <head>
    <title>Modificar datos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/estilos.css">

  </head>
  <body>
  <div class="container">
      <div class="">
      <div class="col-xs-12 col-lg-5">
      <form method="POST">
      <h1 class="text-center"><strong>Editar Alumno</strong></h1>
      <br>
      <p>Nombre<input type="text" placeholder="Ingrese el nombre" value="<?php echo $mostrar['nombre'] ?>" name="nombre" class="form-control"></p>
      <p>Grado<input type="varchar" placeholder="Ingrese el grado" value="<?php echo $mostrar['grado'];?>" name="grado" class="form-control"></p>
      <p>Grupo<input type="text" placeholder="Ingrese el grupo" value="<?php echo $mostrar['grupo'];?>" name="grupo" class="form-control"></p>
      <p>Correo<input type="varchar" placeholder="Ingrese el correo" value="<?php echo $mostrar['correo'];?>" name="correo" class="form-control"></p>
      <p>Teléfono<input type="bigint" placeholder="Ingrese el teléfono" value="<?php echo $mostrar['telefono'];?>" name="telefono" class="form-control"></p>
      <p>Dirección<input type="varchar" placeholder="Ingrese la dirección" value="<?php echo $mostrar['direccion'];?>" name="direccion" class="form-control"></p>
      <br>
      <input type="submit" name="GUARDAR" value="GUARDAR" class="btn btn-primary btn-block">
      <a href="index.php" class="btn">REGRESAR</a>
      </form>
      </div>
      </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

