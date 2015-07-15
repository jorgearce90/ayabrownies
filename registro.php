<?php include('DB/conf.php'); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"href="<?php echo STYLE?>"/>
    </head>

    <body>
        <div class="container">
            <div class="wrapper">
                <a href="home.php">
                    <img  src="img/wallpaper.jpg"/>
                </a>
                <div class="row">
                    <div class="span4">
                        <form class="form-signin" method = "post" action = "DB/procesarRegistro.php">       
                            <h3 class="form-signin-heading">REGISTRO</h3>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="" autofocus="" />
                            <input type="text" class="form-control" name="apellido" placeholder="Apellido" required="" autofocus="" />
                            <input type="text" class="form-control" name="direccion" placeholder="Direcci&oacute;n" required="" autofocus="" />
                            <input type="text" class="form-control" name="telefono" placeholder="Tel&eacute;fono" required="" autofocus="" />
                            <input type="email" class="form-control" name="correo" placeholder="Correo" required="" autofocus="" />
                            <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
                            <button class="btn btn-lg btn-danger btn-block" type="submit">Registrarse</button>   
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script> 
</html>



