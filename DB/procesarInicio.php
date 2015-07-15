<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'conexionDB.php';
error_reporting(E_ALL ^ E_NOTICE);
$ch = curl_init();
$correo     = $_POST['correo']; //Guarda correo
$password   = $_POST['password']; //Guarda correo

$listar     = mysql_query("SELECT * FROM usuario where clave ='$password'");
$user       = mysql_fetch_array($listar);

if($user['clave'] == $password && $user['tipo'] == 1){
    header("location: ../home.php?nombre=".$user['nombre']."&apellido="
            .$user['apellido']."&correo=".$user['correo']."&id=".$user['id']);
}
elseif ($user['tipo'] == 2) {
     header("location: ../homeAdmin.php?nombre=".$user['nombre']."&apellido="
            .$user['apellido']."&correo=".$user['correo']);
}
else{
    header('Location: ../index.php');
}


mysql_close($conexion);
