<?php
    include('conf.php');
    $conexion = mysql_connect ("localhost","root","");

    if(!$conexion){
        die("No se ha podido realizar la conexion a la DB".mysql_error());

    }
    mysql_select_db(DATABASE, $conexion);
?>
