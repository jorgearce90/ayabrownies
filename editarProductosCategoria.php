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
        $cat = $_GET['cat'];
        $listar = mysql_query("SELECT * FROM producto where id_categoria = $cat");
        $registros = array();
        while ($fila = mysql_fetch_array($listar)) {
            array_push($registros, $fila);
        }
        ?>
        <div class="container">

            <br><br>
            <?php
            for ($i = 0; $i < count($registros); $i++) {
                $id= $registros[$i]["id"];
                $imagen = $registros[$i]["imagen"];
                $nombre = $registros[$i]["nombre"];
                $descripcion = $registros[$i]["descripcion"];
                $precio = $registros[$i]["precio"];
                ?>
                <div class="row">
                    <div class="col-md-2">
                        <div class="thumbnail">
                            <?php echo "<img src='$imagen' style='height: 100px; width: 80%; display: block;'>" ?>
                            <div class="caption">
                                <?php echo "<h5>$nombre</h5>"; ?>
                                <?php echo "<h5>$ $precio</h5>"; ?>
                                <p>
                                    <a href="editar.php?id=<?php echo "$id&cat=$cat"; ?>" class="btn btn-primary" role="button">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>  
                                    <a href="DB/eliminar.php?id=<?php echo "$id&cat=$cat"; ?>" class="btn btn-primary" role="button">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                    </a>  
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
        <script type="text/javascript" src="js/mensajes.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->

</html>   
