<!DOCTYPE html>
<html lang="en">
    <?php require_once("codigoReutilizable/head.php") ?>
    <!-- Navigation -->
    <?php require_once("codigoReutilizable/nav.php") ?>
        <body class="body-register">
            <form class="form-register" action="index.html" method="post">
                <h1 class="h1-registro">Registro</h1>
                <div class="container campos-reg">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="lbl-register-nom" for="Nombre">Nombre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input class="input-name" type="Nombre" name="Nombre" placeholder="Escribe tu nombre aqui..." value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                        <label class="lbl-register-email" for="E-mail">E-mail</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                        <input class="input-mail" type="E-mail" name="Nombre" placeholder="Escribe tu e-mail..." value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                        <label class="lbl-register-pass" for="Password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                        <input class="input-pass" type="password" name="Password" placeholder="Ingresa tu contraseña" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                        <label class="lbl-register-repass" for="Re-password">Re-password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                        <input class="input-repass" type="Re-password" name="Re-password" placeholder="Vuelve a ingresar tu contraseña" value="">
                        </div>
                    </div>
                </div>
                <div class="row btn-canc-reg">
                    <div class="col-lg-6 div-btn-reg">
                        <button class="register-btn" type="reset">Registrar</button>
                    </div>
                    <div class="col-lg-6 div-btn-cancel">
                    <button class="cancel-btn" type="submit">Cancelar</button>
                    </div>
                </div>
            </form>
        </body>

</html>