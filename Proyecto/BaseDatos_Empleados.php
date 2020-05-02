
<!DOCTYPE html>
<html>
</head>
<body background="ret.jpg">
<h1><center><p style="color:#000";>Consulta Empleados</p></center></h1>
  <head>
<body>





	<?php



		$usuario = "root";

		$password = "";

		$servidor = "localhost";

		$basededatos = "empresa";




		$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");





		$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );





		$consulta = "SELECT * FROM empleados";

		$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");




		echo "<table borde='2'>";

		echo "<tr>";

		echo "<th>id</th>";

		echo "<th>Nombre</th>";

	        echo "<th>Edad</th>";

	        echo "<th>Correo</th>";

	        echo "<th>Salario</th>";

		echo "</tr>";





		while ($columna = mysqli_fetch_array( $resultado ))

		{

			echo "<tr>";

			echo "<td>" . $columna['id'] . "</td><td>" . $columna['nombre'] . "</td><td>" . $columna['edad'] . "</td><td>" . $columna['correo'] . "</td><td>" . $columna['salario'] . "</td>";
			echo "<td> <a href='Editar_Empleados.php?id=".$columna['id']."''> <button type ='button' class='btn btn-success'> EDITAR</button></a></td>";
			echo "<td> <a href='Eliminar_Empleados.php?id=".$columna['id']."''> <button type ='button' class='btn btn-danger'> ELIMINAR</button></a></td>";
			echo "</tr>";


		}



		echo "</table>";





		mysqli_close( $conexion );

	?>
</center>
<li><a href="Pagina_Principal.html">Pagina Principal</a></li>
