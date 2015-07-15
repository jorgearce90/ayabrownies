<?php
include 'conexionDB.php';
error_reporting(E_ALL ^ E_NOTICE);

$nombre         = $_POST['nombre']; //Guarda correo
$descripcion    = $_POST['descripcion']; //Guarda correo
$precio         = $_POST['precio']; //Guarda correo
$ruta1           = "../img/Imagenes/". $_FILES['imagen']['name']; //Guarda correo
$ruta2           = "img/Imagenes/". $_FILES['imagen']['name']; //Guarda correo
$categoria      = $_POST['radio'];
echo $categoria;
if(move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta1)) { 
    
    mysql_query("INSERT INTO producto( nombre, id_categoria, precio, descripcion, imagen)
            VALUES('$nombre',$categoria,$precio,'$descripcion','$ruta2')");
    
    
    header('Location: ../homeAdmin.php');
    
}else{
echo "Ha ocurrido un error, trate de nuevo!";
}

mysql_close($conexion);