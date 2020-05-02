<html>
</head>
<body background="leon.jpg">
<h1><center><p style="color:#000";>Ingresar Datos de Departamentos</p></center></h1>
  <html>

<?php

	$usuario = "root";

	$password = "";

	$servidor = "localhost";

	$basededatos = "empresa";

	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

echo "Producto con menor existencia.";

	$consulta = "SELECT * FROM inventario ORDER by cantidad asc limit 1";

	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	echo "<table borde='2'>";

	echo "<tr>";

	echo "<th>id</th>";

	echo "<th>producto</th>";

  echo "<th>precio</th>";

	echo "<th>cantidad</th>";

	echo "</tr>";

	while ($columna = mysqli_fetch_array( $resultado ))

	{
		echo "<tr>";

		echo "<td>" . $columna['id'] . "</td><td>" . $columna['producto'] . "</td><td>" . $columna['precio'] . "</td><td>" . $columna['cantidad'] ;

		echo "</tr>";

	}

	echo "</table>";


echo "Producto con mayor existencia.";

  $consulta = "SELECT * FROM inventario ORDER by cantidad desc limit 1";

	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	echo "<table borde='2'>";

	echo "<tr>";

	echo "<th>id</th>";

	echo "<th>producto</th>";

  echo "<th>precio</th>";

	echo "<th>cantidad</th>";

	echo "</tr>";

	while ($columna = mysqli_fetch_array( $resultado ))

	{

		echo "<tr>";

		echo "<td>" . $columna['id'] . "</td><td>" . $columna['producto'] . "</td><td>" . $columna['precio'] . "</td><td>" . $columna['cantidad'] ;

		echo "</tr>";

	}

	echo "</table>";

	echo "Producto sin existencia.";

	  $consulta = "SELECT * FROM inventario where cantidad = 0";

		$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");




		echo "<table borde='2'>";

		echo "<tr>";

		echo "<th>id</th>";

		echo "<th>producto</th>";

	  echo "<th>precio</th>";

		echo "<th>cantidad</th>";

		echo "</tr>";

		while ($columna = mysqli_fetch_array( $resultado ))

		{

			echo "<tr>";

			echo "<td>" . $columna['id'] . "</td><td>" . $columna['producto'] . "</td><td>" . $columna['precio'] . "</td><td>" . $columna['cantidad'] ;

			echo "</tr>";

		}

		echo "</table>";

	mysqli_close( $conexion );
?>
</center>
<li><a href="Pagina_Principal.html">Pagina Principal</a></li>
