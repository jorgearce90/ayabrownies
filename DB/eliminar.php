<?php
include 'conexionDB.php';
error_reporting(E_ALL ^ E_NOTICE);

$id  = $_GET['id'];
$cat = $_GET['cat'];
$sql = "SELECT imagen FROM producto where id = $id ";
$sql2 = "DELETE FROM producto where id = $id";
echo $sql;
$listar = mysql_query($sql);
$imagen = mysql_fetch_array($listar);
echo $imagen['imagen'];
unlink("../".$imagen['imagen']);
if(mysql_query($sql2)){
    header("location: ../editarProductosCategoria.php?cat=$cat");
}

mysql_close($conexion);