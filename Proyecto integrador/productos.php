<!DOCTYPE html>
<?php
require_once("codigoReutilizable/productos.php");

 ?>
<html lang="en" dir="ltr">
  <?php require_once("codigoReutilizable/head.php") ?>
  <body>
    <?php require_once("codigoReutilizable/nav.php") ?>
      <section class="jumbotron text-center">
          <div class="container">
              <h1>Productos</h1>
              <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
          </div>
      </section>

      <div class="container">
          <div class="row">
            <?php foreach ($productos as $key => $value): ?>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="imagen-productos" src="<?php echo $value["imagen"]; ?>" alt="">
                <div class="card-body">
                  <h4><?php echo $value["Nombre"]; ?></h4>
                  <p class="card-text"><?php echo $value["descripcion"]; ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="detalleProducto.php?prod=<?php echo $key; ?>" ><button type="button" class="btn btn-sm btn-outline-secondary">Ver mas</button></a>
                      <button type="button" class="btn btn-sm btn-outline-secondary"> Agregar al Carrito</button>
                    </div>
                    <small class="text-muted"><?php echo "$".$value["precio"]; ?></small>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
      </div>










    <?php require_once("codigoReutilizable/footer.php") ?>
  </body>
</html>
