<?php include('DB/conf.php'); ?>
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
        include('templates/headerAdmin.php');
        include ('DB/conexionDB.php');
        ?>
        <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><h1></h1></div>
                    <table class="table">
                        <thead style="color:white;background-color: #c0392b">
                            <tr>
                                <th>id</th>
                                <th>id_u</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Tel&eacute;fono</th>
                                <th>direccion</th>
                                <th>id_pro</th>
                                <th>Articulo</th>
                                <th>Precio</th>
                                <th>Fecha</th>
                                <th>Despachar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT 
                                    pe.id id_pe, u.id id_u, u.nombre nombre_u, 
                                    u.correo correo,u.telefono telefono, 
                                    u.direccion direccion, pr.id id_pr,
                                    pr.nombre nombre_pr, pr.precio precio, 
                                    pe.fecha fecha
                                FROM
                                    pedidos pe, usuario u, producto pr 
                                WHERE
                                    u.id = pe.id_usuario and 
                                    pe.id_producto = pr.id";

                            $listarP = mysql_query($sql);
                            $registros = array();
                            while ($fila = mysql_fetch_array($listarP)) {
                                $pedido = $fila['id_pe']
                                ?>    
                                <tr>
                                    <th><?php echo $fila['id_pe'] ?></th>
                                    <th><?php echo $fila['id_u'] ?></th>
                                    <th><?php echo $fila['nombre_u'] ?></th>
                                    <th><?php echo $fila['correo'] ?></th>
                                    <th><?php echo $fila['telefono'] ?></th>
                                    <th><?php echo $fila['direccion'] ?></th>
                                    <th><?php echo $fila['id_pr'] ?></th>
                                    <th><?php echo $fila['nombre_pr'] ?></th>
                                    <th><?php echo $fila['precio'] ?></th>
                                    <th><?php echo $fila['fecha'] ?></th>
                                    <th>
                                        <a href="DB/despacharPedido.php<?php echo "?idPed=$pedido"; ?>" class="btn btn-danger" role="button" onclick="despachar();">
                                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                        </a>
                                    </th>
                                    </p>
                                </tr>
                            <?php } ?>    
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>
        <script type="text/javascript" src="js/mensajes.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</html>