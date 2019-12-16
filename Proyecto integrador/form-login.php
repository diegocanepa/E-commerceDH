<!DOCTYPE html>
<html lang="en">

<?php require_once("codigoReutilizable/head.php") ?>
    <body>
        <!-- Navigation -->
        <?php require_once("codigoReutilizable/nav.php") ?>

<body id="body-login">
    <div class="page-login">
        <div class="container-login">
            <div class="left-login">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="titulo-login">Beaver Builders</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="subtitulo-login">Login</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="texto-login">Ingresa a nuestra pagina y conoce ofertas exclusivas!. Ademas podes llevar un control especifico de tus compras y recibir novedades cada semana.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-login">
                <div class="formlogin">
                    <div class="box-email">
                        <label class="label-login" for="email">Email</label>
                        <input class="input-login" type="email" id="email">
                    </div>
                    <div class="box-pass">
                        <label class="label-login" for="password">Password</label>
                        <input class="input-login" type="password" id="password">
                    </div>
                    <div class="boton-send">
                        <div class="input-send"><input type="submit" id="submit-login" value="Entrar"></div>
                        <div class="log-forgot-pass"><a href="">¿Olvidaste tu contraseña?</a></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include_once("codigoReutilizable/footer.php") ?>
</body>

</html>