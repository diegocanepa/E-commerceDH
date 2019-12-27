<!DOCTYPE html>
<html lang="en">
<?php
if ($_POST) {
  $validacionesEmail = [];
  $validacionesPassword = [];

  if (filter_var($_POST["email"]) == false) {
    $validacionesEmail[] = "El campo mail esta vacio!!";
  }
  if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
    $validacionesEmail[] = "El email no tiene el formato correspondiente!! ";
  }
  if (filter_var($_POST["password"]) == false) {
    $validacionesPassword[] = "El campo contraseña esta vacio!! ";
  }
  if (strlen($_POST["password"]) < 6) {
    $validacionesPassword[] = "La contraseña es demasiado debil. Proba con una mas larga!! ";
  }
}


 ?>


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
                    <form class="" action="form-login.php" method="post">
                      <div class="box-email">
                          <label class="label-login" for="email">Email</label>
                          <input class="input-login" type="email" id="email" name="email">
                          <?php if ($_POST): ?>
                            <?php if (count($validacionesEmail) == 0 && count($validacionesPassword) == 0): ?>
                                <?php header("Location: http://localhost/E-commerceDH/home.php"); ?>
                            <?php else: ?>
                              <?php foreach ($validacionesEmail as $value): ?>
                                  <p class="error-validacion"><?php echo $value; ?></p>
                              <?php endforeach; ?>
                            <?php endif; ?>
                          <?php endif; ?>
                      </div>
                      <div class="box-pass">
                          <label class="label-login" for="password">Password</label>
                          <input class="input-login" type="password" id="password" name="password">
                          <?php if ($_POST): ?>
                            <?php if (count($validacionesEmail) == 0 && count($validacionesPassword) == 0): ?>
                                <meta http-equiv="refresh" content="10; url=http://localhost/E-commerceDH/home.php">
                            <?php else: ?>
                              <?php foreach ($validacionesPassword as $value): ?>
                                  <p class="error-validacion"><?php echo $value; ?></p>
                              <?php endforeach; ?>
                            <?php endif; ?>
                          <?php endif; ?>
                      </div>
                      <div class="boton-send">
                          <div class="input-send"><input type="submit" id="submit-login" value="Entrar"></div>
                          <div class="log-forgot-pass"><a href="">¿Olvidaste tu contraseña?</a></div>
                      </div>
                    </form>
                  </div>
              </div>
        </div>
    </div>
    <?php include_once("codigoReutilizable/footer.php") ?>
</body>

</html>
