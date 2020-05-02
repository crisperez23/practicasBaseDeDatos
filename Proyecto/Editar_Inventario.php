<html>
</head>
<body background="leon.jpg">
<h1><center><p style="color:#000";>Ingresar Datos de Departamentos</p></center></h1>
  <html>

	<?php

$consulta=ConsultarProducto($_GET['id']);

function ConsultarProducto($id)
{
	$usuario = "root";

	$password = "";

	$servidor = "localhost";

	$basededatos = "empresa";

	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	$consulta="SELECT * FROM inventario WHERE id='".$id."' ";
	$resultado = mysqli_query( $conexion, $consulta );
	$columna=mysqli_fetch_array($resultado);
	return [
		$columna['id'],
		$columna['producto'],
		$columna['precio'],
		$columna['cantidad']
	];

}

?>
<html>
<head>
	<title></title>
</head>
<body>
	<span> <h1>Editar </h1> </span>
	  		<br>
		  <form action="Inventario.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
	      <input type="hidden" name="id" value="<?php echo $_GET['id']?> ">

	  		<label>Producto: </label>
	  		<input type="text" name="producto" name="producto" value="<?php echo $consulta[1] ?>"><br>

				<label>Precio: </label>
	  		<input type="int" name="precio" name="precio" value="<?php echo $consulta[2] ?>"><br>

	  		<label>Cantidad: </label>
	  		<input type="int" name="cantidad" name="cantidad" value=" <?php echo $consulta[3] ?> "><br>

	  		<br>
	  		<button type="submit" class="btn btn-success">Guardar</button>
</form>
</body>
</html>
