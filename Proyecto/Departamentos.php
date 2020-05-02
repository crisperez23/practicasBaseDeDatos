<?php
$usuario = "root";

$password = "";

$servidor = "localhost";

$basededatos = "empresa";

$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$consulta = "SELECT * FROM departamentos";


$id=$_POST['id'];
$nombre=$_POST['nombre'];

$resultado=mysqli_query($conexion, "UPDATE departamentos SET nombre='$nombre' WHERE id='$id'");
header('location: BaseDatos_Departamentos.php');

?>
</div>


</body>
</html>
