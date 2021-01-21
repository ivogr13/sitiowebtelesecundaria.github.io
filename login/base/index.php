<?php
$conexion=mysqli_connect("localhost","root","","escuela");
?>

<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Base de datos de Alumnos</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="style.css">
  
</head>
<body>

<br>

  <div id="contenido">
	  <table style="margin: auto; width: auto; border-collapse: separate; border-spacing: 50px 5px;">

	  <tr>

		  <h1>BASE DE DATOS DE LOS ALUMNOS</h1>	  

		<tr>
	  <tr>
	  <td> <a href="/pagina/login/index.php" class="btn">REGRESAR</a> </td>
	  </tr>
			<td>NOMBRE</td>
			<td>GRADO</td>
			<td>GRUPO</td>
			<td>CORREO</td>	
      <td>TELÉFONO</td>
			<td>DIRECCIÓN</td>
	  <td> <a href="nuevo1.php"> <button type="button" class="btn btn-info">NUEVO</button> </a> </td>
		</tr>

		<?php 
		$sql="SELECT * from alumnos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['grado'] ?></td>
			<td><?php echo $mostrar['grupo'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
      <td><?php echo $mostrar['telefono'] ?></td>
			<td><?php echo $mostrar['direccion'] ?></td>
			<td> <a href="modificar.php?idAlumno=<?php echo $mostrar['idAlumno'] ?>"
			 class="btn btn-primary">EDITAR</button> </a> </td>
			<td> <a href="eliminar.php?idAlumno=<?php echo $mostrar['idAlumno'] ?>" 
			class="btn btn-danger">ELIMINAR</a> </td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>
