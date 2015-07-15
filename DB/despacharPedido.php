<?php

$idPed = $_GET['idPed'];
include 'conexionDB.php';
error_reporting(E_ALL ^ E_NOTICE);

$sql = "DELETE FROM pedidos where id = $idPed";
if (mysql_query($sql)) {
    header("location: ../verPedidos.php");
}

mysql_close($conexion);
