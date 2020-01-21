<?php
require_once("codigoReutilizable/funciones.php");
iniciarSesion();
$json = file_get_contents("usuarios.json");
$usuarios = json_decode($json , true);
$usuarioActual = $usuarios[$_SESSION["indice"]];
if (isset($_SESSION["foto"])) {
  //
}else {
  $_SESSION["foto"] = "img/messi-perfil.jpg";
}


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php require_once("codigoReutilizable/head.php") ?>
  </head>
  <body class="mi-perfil">
    <?php require_once("codigoReutilizable/nav.php") ?>
    <div class="customer-form text-center">
      <div class="container">
        <div class="py-5 text-center">
          <h2>Perfil de Usuario</h2>
        </div>

        <div class="container">
          <div class="col-12 text-center" >
            <input type="image" src="<?=$_SESSION["foto"]; ?>" value="" class="img imagen-perfil">
          </div>

        </div>
              <div class="mb-3">
                <label for="username">Nombre de Usuario</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <label type="text" class="form-control" id="username" for=""><?=$usuarioActual["nombre"]; ?></label>
                  <div class="invalid-feedback" style="width: 100%;">
                    Campo Obligatorio
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label for="email">Email <span class="text-muted"></span></label>
                <label type="email" class="form-control" id="email" for=""><?=$usuarioActual["e-mail"]; ?></label>
                <div class="invalid-feedback">
                  Porfavor ingrese un email valido.
                </div>
              </div>
              <?php

              if ( isset($usuarioActual["direccion1"]) && $usuarioActual["direccion1"] != ""):?>
              <div class="mb-3">
                <label for="address">Dirección</label>
                <label type="text" class="form-control" id="address" for=""><?=$usuarioActual["direccion1"]; ?></label>
                <div class="invalid-feedback">
                  Porfavor ingrese su direccion actual.
                </div>
              </div>
              <?php endif; ?>

              <?php if ( isset($usuarioActual["direccion2"]) && $usuarioActual["direccion2"] != ""): ?>
                <div class="mb-3">
                  <label for="address2">Dirección 2 <span class="text-muted"></span></label>
                  <label type="text" class="form-control" id="address2" for=""><?=$usuarioActual["direccion2"]; ?></label>
                </div>
              <?php endif; ?>

              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 p-2">
                  <a href="perfilUsuario.php"><button class="btn btn-primary  btn-block" type="button">Editar Perfil</button></a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 p-2">
                  <a href="productos.php"><button class="btn btn-primary  btn-block" type="button">Cancelar</button></a>

                </div>
              </div>
          </div>
          </div>
    <?php include_once("codigoReutilizable/footer.php") ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
