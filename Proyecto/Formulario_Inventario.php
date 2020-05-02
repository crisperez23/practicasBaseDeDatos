<?php

  //conexion con el servidor
  $conectar=@mysqli_connect('localhost' , 'root' , '');
  // verificar la conexion
  if(!$conectar){
    echo "no se pudo conectra con el servidor";
    }
  if(!mysqli_select_db($conectar, 'empresa')){
      echo"no se encontro la base de datos";
    }

  // recuperar variebles
  $id= $_POST['id'];
  $producto= $_POST['producto'];
  $precio= $_POST['precio'];
  $cantidad= $_POST['cantidad'];
  $sql="INSERT INTO inventario(id,producto,precio,cantidad) VALUES('$id','$producto','$precio','$cantidad')";

  // ejecutar
  if(!mysqli_query($conectar,$sql)){
    echo"hubo un error";
  }else{
    echo"datos guardados correctamente<br><a href='Formulario_Inventario.html'>volver</a>";
  }
?>
