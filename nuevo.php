<?php include('DB/conf.php'); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"href="<?php echo STYLE?>"/>
    </head>
    <body>
        <?php include('templates/headerAdmin.php'); ?>
        <div class="container">
            <div class="wrapper">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <form class="form-signin" onsubmit="return nuevoProducto();" method = "POST" action = "DB/procesarNuevo.php" enctype="multipart/form-data">       
                        <h3 class="form-signin-heading">Nuevo Producto</h3><br><br>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="" autofocus="" >
                        <textarea type="text" class="form-control" name="descripcion" placeholder="Descripci&oacute;n" required="" autofocus=""></textarea>
                        <input type="number" class="form-control" name="precio" placeholder="precio" required="" autofocus="" >
                        <input type="file" class="form-control" name="imagen" placeholder="Imagen" required=""> 
                        <br><br>
                        <strong>CATEGORIA</strong>
                        <div class="radio">
                            <input type="radio" name="radio" value=1><small>Brownie</small>
                            <br>
                            <input type="radio" name="radio" value=2><small>Galleta</small>
                            <br><br>
                        </div>
                        <button class="btn btn-lg btn-danger btn-block" type="submit">Nuevo Producto</button>   
                    </form>
                </div>
            </div> 
        </div>
    </body>

    <script type="text/javascript" src="js/mensajes.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</html>

