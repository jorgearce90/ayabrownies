<?php
include 'conexionDB.php';
error_reporting(E_ALL ^ E_NOTICE);
$id             = $_POST['id'];
$nombre         = $_POST['nombre']; //Guarda nombre
$descripcion    = $_POST['descripcion']; //Guarda descripcion
$precio         = $_POST['precio']; //Guarda precio
$ruta1           = "../img/Imagenes/". $_FILES['imagen']['name']; //Guarda en servidor
$ruta2           = "img/Imagenes/". $_FILES['imagen']['name']; //Guarda base de datos
$categoria      = $_POST['radio'];

$sql = "SELECT imagen FROM producto where id = $id ";
$listar = mysql_query($sql);
$imagen = mysql_fetch_array($listar);

if(!$_FILES['imagen']['name']){
    mysql_query ("UPDATE producto "
    ."SET nombre = '$nombre', id_categoria = '$categoria',precio = $precio, "
    ."descripcion = '$descripcion' WHERE id= $id");
    header("location: ../homeAdmin.php");
}else
if(move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta1)) {
    unlink("../".$imagen['imagen']);
    echo mysql_query ("UPDATE producto "
    ."SET nombre = '$nombre', id_categoria = '$categoria',precio = $precio, "
    ."descripcion = '$descripcion',imagen = '$ruta2' WHERE id= $id");
    header("location: ../homeAdmin.php");
}
mysql_close($conexion);