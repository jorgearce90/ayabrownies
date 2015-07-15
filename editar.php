<?php
include('DB/conf.php');
include 'DB/conexionDB.php';
error_reporting(E_ALL ^ E_NOTICE);
$id = $_GET['id'];
$cat = $_GET['cat'];
$sql = "SELECT * FROM producto where id = $id ";
$listar = mysql_query($sql);
$p = mysql_fetch_array($listar);

mysql_close($conexion);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"href="<?php echo STYLE?>"/>
    </head>
    <body>
        <?php
        include('templates/headerAdmin.php');
        ?>
        <div class="container">
            <div class="wrapper">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <form name= editar lass="form-signin" method = "POST" action = "DB/procesarEditar.php" onsubmit="return editarProducto();" enctype="multipart/form-data">       
                        <h3 class="form-signin-heading">Editar Producto</h3><br><br>
                        <input value = "<?php echo $p['id'] ?>" type="text" class="form-control" name="id" disable="true" readonly >
                        <input value = "<?php echo $p['nombre'] ?>" type="text" class="form-control" name="nombre" required="" autofocus="" >
                        <input value = "<?php echo $p['descripcion'] ?>" type="text" class="form-control" id="descripcion" name="descripcion" required="" autofocus=""></textarea>
                        <input value = "<?php echo $p['precio'] ?>" type="number" class="form-control" name="precio"  required="" autofocus="" >
                        <input value = "<?php echo $p['imagen'] ?>" type="file" class="form-control" name="imagen" > 
                        <br><br>
                        <strong>CATEGORIA</strong>
                        <div class="radio">
                            <input type="radio" name="radio" value=1 <?php if($cat== 1){echo "checked='checked'";}?> ><small>Zapatos Dama</small>
                            <br>
                            <input type="radio" name="radio" value=2 <?php if($cat == 2){echo "checked='checked'";}?> ><small>Ropa Dama</small>
                            <br>
                            <input type="radio" name="radio" value=3 <?php if($cat == 3){echo "checked='checked'";}?> ><small>Accesorios Dama</small>
                            <br>
                            <br>
                            <input type="radio" name="radio" value=4 <?php if($cat == 4){echo "checked='checked'";}?> ><small>Zapatos Caballero</small>
                            <br>
                            <input type="radio" name="radio" value=5 <?php if($cat == 5){echo "checked='checked'";}?> ><small>Ropa Caballero</small>
                            <br>
                            <input type="radio" name="radio" value=6 <?php if($cat == 6){echo "checked='checked'";}?> ><small>Accesorios Caballero</small>
                            <br><br>
                        </div>
                        <button class="btn btn-lg btn-danger btn-block" type="submit">Editar</button>   
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