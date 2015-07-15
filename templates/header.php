
<?php
    include ('DB/conexionDB.php');
    $listar = mysql_query("SELECT * FROM almacen");
    $fila = mysql_fetch_array($listar);
    $empresa = $fila['nombre'];
    $mision = $fila['mision'];
    $vision = $fila['vision'];
    $quienes = $fila['quienes'];
    $contacto = $fila['correo'];
    
    if ($_GET) {
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $correo = $_GET['correo'];
    $cadena = "?id=" . $_GET['id'] . "&nombre=" . $_GET['nombre'] . "&apellido=" . $_GET['apellido'] . "&correo=" . $_GET['correo'];
}
?>

<nav class = "navbar navbar-inverse" role = "navigation">
    <div class = "container-fluid">
        <!--Brand and toggle get grouped for better mobile display -->
        <div class = "navbar-header">
            <button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#bs-example-navbar-collapse-1">
                <span class = "sr-only">Toggle navigation</span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
            </button>
            <a class = "navbar-brand" href = "<?php echo "home.php$cadena" ?>"><?php echo $empresa; ?></a>
        </div>

        <!--Collect the nav links, forms, and other content for toggling -->
        <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">
            <ul class = "nav navbar-nav navbar-right">

                <li class = "dropdown">
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                        <strong> Sobre Nosotros </strong><span class = "caret">
                    </a>
                    <ul class = "dropdown-menu" role = "menu">
                        <li><a href = "<?php echo "quienesSomos.php$cadena" ?>"><strong>Quienes Somos</strong></a></li>
                    </ul>
                </li>

                <li class = "dropdown">
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                        <span class='glyphicon glyphicon-home' aria-hidden='true'></span><strong> Pedidos</strong><span class = "caret">
                    </a>
                    <ul class = "dropdown-menu" role = "menu">
                        <li><a href = "<?php echo "misPedidos.php$cadena" ?>"><strong>Ver Mis Pedidos</strong></a></li>
                    </ul>
                </li>



                <li class = "dropdown">
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                        <strong>Productos</strong><span class = "caret"></span>
                    </a>
                    <?php
                    echo "<ul class = 'dropdown-menu' role = menu>";
                    echo "<li><a href = 'productosCategoria.php" . $cadena . "&cat=2'><strong>Galletas</strong></a></li>";
                    echo "<li><a href = 'productosCategoria.php" . $cadena . "&cat=1'><strong>Brownies</strong></a></li>";
                    echo "</ul>";
                    ?>
                </li>

                <li class = "dropdown">

                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                        <span class='glyphicon glyphicon-user' aria-hidden='true'></span><strong></strong><span class = "caret">
                    </a>
                    <ul class = "dropdown-menu" role = "menu">
                        <li><a href = "index.php"><strong>Cerrar Sesi&oacute;n</strong></a></li>
                    </ul>

                </li>

                <li class = "dropdown">
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">

                        <?php
                        if (isset($_GET['correo'])) {
                            echo " Bienvenido: ";
                            $correo = $_GET['correo'];
                            $nombre = $_GET['nombre'];
                            $apellido = $_GET['apellido'];
                            echo($nombre);
                            echo($apellido);
                            echo( "<small> " . $correo . "<small>");
                        }
                        ?>
                </li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div><!--/.container-fluid -->
</nav>