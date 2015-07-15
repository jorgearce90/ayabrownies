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
        ?>
        <div class="container">
            <h2>Misi&oacute;n</h2><br>
            <h4><?php echo($mision);?></h4><br>
            <h2>Visi&oacute;n</h2><br>
            <h4><?php echo($vision);?></h4><br>
            <h2>Quienes Somos </h2><br>
            <h4><?php echo($quienes);?></h4><br>
            <h2>Cont&aacute;ctenos</h2><br>
            <h4><?php echo($contacto);?></h4><br>
        </div>
        <script type="text/javascript" src="js/mensajes.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</html>   
