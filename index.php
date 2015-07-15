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
        <link rel="stylesheet"href="css/index.css"/>
    </head>

    <body>
        
        <div class="container">
            <div class="wrapper">        

                <div class="row">
                    <div class="span4">
                        <form class="form-signin" method = "post" action = "DB/procesarInicio.php">       
                            <h3 class="form-signin-heading">BIENVENIDO</h3>
                            <input type="email" class="form-control" name="corrreo" placeholder="Correo" required="" autofocus="" />
                            <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
                            <button class="btn btn-lg btn-danger btn-block" type="submit">Entrar</button>   
                        </form>
                    </div>
                </div>
            </div>
                <h3><a href="registro.php">Aun no te haz registrado</a><h3>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script> 
</html>



