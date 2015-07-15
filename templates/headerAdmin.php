    <?php
    include ('DB/conexionDB.php');
    $listar = mysql_query("SELECT * FROM almacen");
    $fila = mysql_fetch_array($listar);
    $empresa = $fila['nombre'];
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
            <a class = "navbar-brand" href = "index.php"><?php echo $empresa; ?></a>
        </div>

        <!--Collect the nav links, forms, and other content for toggling -->
        <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">
            <ul class = "nav navbar-nav navbar-right">

                <li class = "dropdown">
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                        <strong>NUEVO </strong><span class = "caret">
                    </a>
                    <ul class = "dropdown-menu" role = "menu">
                        <li><a href = "nuevo.php"><strong>Producto</strong></a></li>
                    </ul>
                </li>
                <li class = "dropdown">
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                        <strong>Pedidos</strong><span class = "caret">
                    </a>
                    <ul class = "dropdown-menu" role = "menu">
                        <li><a href = "verPedidos.php"><strong>Ver Pedidos</strong></a></li>
                    </ul>
                </li>
                <li class = "dropdown">
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                        <strong>Editar Productos </strong><span class = "caret"></span>
                    </a>
                    <?php
                    echo "<ul class = 'dropdown-menu' role = menu>";
                    echo "<li><a href = 'editarProductosCategoria.php?cat=2'><strong>Galletas</strong></a></li>";
                    echo "<li><a href = 'editarProductosCategoria.php?cat=1'><strong>Brownies</strong></a></li>";
                    echo "</ul>";
                    ?>
                </li>

                <li class = "dropdown">
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
                        Bienvenido: Administrador
                    </a>
                </li>
            </ul>



        </div><!--/.navbar-collapse -->

    </div><!--/.container-fluid -->
</nav>