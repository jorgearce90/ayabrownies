<?php

$id = $_GET['id'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$correo = $_GET['correo'];
$cadena = "?id=" . $_GET['id'] . "&nombre=" . $_GET['nombre'] . "&apellido=" . $_GET['apellido'] . "&correo=" . $_GET['correo'];
$idPed = $_GET['idPed'];
include 'conexionDB.php';
error_reporting(E_ALL ^ E_NOTICE);

$sql = "DELETE FROM pedidos where id = $idPed";
if (mysql_query($sql)) {
    header("location: ../misPedidos.php.$cadena");
}

mysql_close($conexion);
