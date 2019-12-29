<?php
require_once("./codigoReutilizable/funciones.php");
inciarSesion();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="navbar-respon">
    <a class="navbar-brand" href="home.php" id="navbar-brand">Beaver Builder</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php //Si el usuario no se encuentra logueado
        if (isset($_SESSION["id"]) == false) {
        ?>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" id="nav-li" href="productos.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-li" href="home.php#about-services">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-li" href="home.php#footer-section">Contactanos</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0" id="end">
                <div class="menu-derecha" id="menu-derecha">
                    <li class="nav-item">
                        <a class="nav-link" id="nav-li" href="form-login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-li" href="form-register.php">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-li-carrito" href="carrito.php"><img id="carrito-compras-img" src="resources/carrito-compras2.png" alt=""></a>
                    </li>
                    <!-- En caso de que este logueado -->
                <?php } else {  ?>
                    <div class="form-inline my-2 my-lg-0" id="end">
                        <div class="menu-derecha" id="menu-derecha">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" id="nav-li" href="" onclick="<?php session_destroy(); ?>">Log out </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav-li" href="form-register.php">Mi perfil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav-li-carrito" href="carrito.php"><img id="carrito-compras-img" src="resources/carrito-compras2.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
    </div>
</nav>
