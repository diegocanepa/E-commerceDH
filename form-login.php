<!DOCTYPE html>
<?php
require_once("./codigoReutilizable/funciones.php");


$errores = [];

if ($_POST) {
  //Recibo todos los errores de las validaciones
  $errores = validarFormLogin();

  //Si no hay errores, entonces registro al usuario
  if (count($errores) == 0) {
    //controlo que verdaderamente exista el usuarios.
    $json = file_get_contents("usuarios.json");
    $arrayUsuarios = json_decode($json, true);
    var_dump($arrayUsuarios);
    foreach ($arrayUsuarios as $key => $value) {
        echo $value["password"];
        echo $_POST["password"];
        if ($value["email"] == $_POST["email"] && password_verify($_POST["password"], $value["password"])) {
            $_SESSION['id'] = $value["email"];
            $_SESSION['estado'] = 'Autenticado';
          header("Location: productos.php");
          exit;
      }
    }
    echo "NOOOOOOOOOOOOOOOOOOOOOO no tas registrado";
  }
}
?>
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
                    <form class="" action="form-login.php" method="post">
                      <div class="box-email">
                          <label class="label-login" for="email">Email</label>
                          <input class="input-login" type="email" id="email" name="email" placeholder="Escribe tu E-mail aqui..." value="<?= persistirDato("email", $errores) ?>">
                          <?= imprimirErrores("email", $errores)?>
                      </div>
                      <div class="box-pass">
                          <label class="label-login" for="password">Password</label>
                          <input class="input-login" type="password" id="password" name="password" placeholder="Escribe tu nombre aqui..." value="<?= persistirDato("password", $errores) ?>">
                          <?= imprimirErrores("password", $errores)?>
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
