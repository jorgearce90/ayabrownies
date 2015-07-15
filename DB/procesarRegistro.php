<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'conexionDB.php';
error_reporting(E_ALL ^ E_NOTICE);

$nombre = $_POST['nombre']; //Guarda el nombre
$apellido = $_POST['apellido']; //Guarda apellido
$correo = $_POST['correo']; //Guarda correo
$password = $_POST['password']; //Guarda password
$direccion = $_POST['direccion']; //Guarda password
$telefono = $_POST['telefono']; //Guarda password

$listar = mysql_query("SELECT * FROM usuario where correo ='$correo'");
$fila = mysql_fetch_array($listar);

if ($fila['correo'] == $correo) {
    header('Location: ../registro.php');
} else {
    mysql_query("INSERT INTO usuario (nombre,apellido,direccion,telefono,correo,clave,tipo)
    VALUES ('$nombre','$apellido','$direccion',$telefono,'$correo','$password','1')");
    mysql_close($conexion);
    header('Location: ../index.php');
}


