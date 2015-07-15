<?php

include 'conexionDB.php';
error_reporting(E_ALL ^ E_NOTICE);
$idUsuario  = $_GET['cat'];
$idUsuario  = $_GET['id'];
$nombre     = $_GET['nombre'];
$apellido   = $_GET['apellido'];
$correo     = $_GET['correo'];
$cadena     = "?id=" . $_GET['id'] . "&nombre=" . $_GET['nombre'] .
        "&apellido=" . $_GET['apellido'] . "&correo=" . $_GET['correo']. "&cat=" . $_GET['cat'];

$idProducto         = $_GET['idP'];
date_default_timezone_set('America/Bogota');
$fecha = date("Y-m-d H:i:s");
mysql_query("INSERT INTO pedidos (id_producto, id_usuario,fecha) VALUES($idProducto,$idUsuario,'$fecha')");
header('Location: ../productosCategoria.php'.$cadena);
mysql_close($conexion);
