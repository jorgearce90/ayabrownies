<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include('DB/conf.php'); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"href="<?php echo STYLE?>"/>
    </head>
    <body>
        <?php
        include('templates/header.php');
        include ('DB/conexionDB.php');
        $listarP = mysql_query("SELECT id_producto FROM pedidos where id_usuario = $id");
        $listar = mysql_query("SELECT * FROM pedidos where id_usuario = $id");
        $registros = array();
        $pedidos = array();
        $precioTotal = 0;
        while ($pedido = mysql_fetch_array($listar)) {
            array_push($pedidos , $pedido);
        }
        while ($fila = mysql_fetch_array($listarP)) {
            $productos = mysql_query("SELECT * FROM producto where id = " . $fila['id_producto']);
            $pr = mysql_fetch_array($productos);
            array_push($registros, $pr);
        }
        ?>
        <div class="container">
            <br><br>
            <div class="row">
            <?php
            for ($i = 0; $i < count($registros); $i++) {
                $idPedido = $pedidos[$i]["id"];
                $fecha = $pedidos[$i]["fecha"];
                $id = $registros[$i]["id"];
                $imagen = $registros[$i]["imagen"];
                $nombre = $registros[$i]["nombre"];
                $descripcion = $registros[$i]["descripcion"];
                $precio = $registros[$i]["precio"];
                $precioTotal +=$precio;
                ?>
                    <div class="col-md-2">
                        <div class="thumbnail">
                            <?php echo "<h5>$nombre</h5>"; ?>
                            <?php echo "<img src='$imagen' style='height: 50px; width: 50px; display: block;'>" ?>
                            <div class="caption">
                                <?php echo "<h7>C&oacute;digo: $idPedido</h7><br>"; ?>
                                <?php echo "<h7>Fecha: $fecha</h7><br>"; ?>
                                <?php echo "<h5>$ $precio</h5>"; ?>
                                <p>
                                    <a href="DB/eliminarDeCarro.php<?php echo "$cadena&idPed=$idPedido"; ?>" class="btn btn-danger" role="button" onclick="eliminarDeCarro();">
                                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Quitar
                                    </a>  
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-md-2">
                        <div class="thumbnail">
                            <br><br><br>
                            <h1>Total</h1>
                            <?php echo "<h2>$ $precioTotal</h2>"; ?>
                            <br><br><br><br>
                        </div>
                    </div>
            </div>

        </div>
        <script type="text/javascript" src="js/mensajes.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</html>   
