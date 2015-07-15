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
        
        $cat = $_GET['cat'];
        $listar = mysql_query("SELECT * FROM producto where id_categoria = $cat");
        $registros = array();
        while ($fila = mysql_fetch_array($listar)) {
            array_push($registros, $fila);
        }
        ?>
        <div class="container">
            <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <?php
                    for ($i = 1; $i < count($registros); $i++) {
                        echo "<li data-target='#myCarousel'" . "data-slide-to=" . $i . "></li>";
                    }
                    ?>
                </ol>
                <div class="carousel-inner">
                    <?php
                    for ($i = 0; $i < count($registros); $i++) {
                        $imagen = $registros[$i]["imagen"];
                        $nombre = $registros[$i]["nombre"];
                        $descripcion = $registros[$i]["descripcion"];
                        $precio = $registros[$i]["precio"];
                        if ($i == 0) {
                            echo "<div class='active item'>";
                            echo"<h1>";
                            echo $nombre;
                            echo"</h1>";
                            echo "<div class='row'>";
                        } else {
                            echo "<div class='item'>";
                            echo"<h1>";
                            echo $nombre;
                            echo"</h1>";
                            echo "<div class='row'>";
                        }
                        echo "<div class='col-sm-5'>";
                        echo "<div class='thumbnail'>";
                        echo"<div class='caption'>";
                        echo"<img src='" . $imagen . "' style='height: 300px; width: 100%; display: block;'>";
                        echo"</div>";
                        echo"</div>";
                        echo"</div>";

                        echo"<div class='col-sm-5'>";
                        echo"<div class='thumbnail'>";
                        echo"<div class='caption'>";
                        echo"<h4>";
                        echo $descripcion;
                        echo"</h4>";
                        echo"</div>";
                        echo"<div class='caption'>";
                        echo"<h4>";
                        echo"$ " . $precio;
                        echo"</h4>";
                        echo"</div>";
                        echo"</div>";
                        echo "</div>";

                        echo "</div>";
                        echo "</div>";
                    }
                    ?>   
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;
                </a>

                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;
                </a>
            </div>
            <br><br>
            <div class="row">
            <?php
            for ($i = 0; $i < count($registros); $i++) {
                $id = $registros[$i]["id"];
                $imagen = $registros[$i]["imagen"];
                $nombre = $registros[$i]["nombre"];
                $descripcion = $registros[$i]["descripcion"];
                $precio = $registros[$i]["precio"];
                ?>
            
            
                <div class="col-md-2">
                    <div class="thumbnail">
                        <?php echo "<h5>$nombre</h5>";?>
                        <?php echo "<img src='$imagen' style='height: 100px; width: 80%; display: block;'>"?>
                        <?php echo "<h7>C&oacute;digo: $id</h7>";?>
                        <?php echo "<h5>$ $precio</h5>";?>
                        <div class="caption">
                            
                            <p>
                                <a href="DB/procesarPedido.php<?php echo "$cadena&idP=$id&cat=$cat"; ?>" class="btn btn-danger" onclick="agregarACarro(); "role="button">
                                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Agregar
                               </a>  
                            </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            
        </div>
        <script>$(document).ready(function () {
                $('.myCarousel').carousel()
            });
        </script>
        <script type="text/javascript" src="js/mensajes.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</html>   
