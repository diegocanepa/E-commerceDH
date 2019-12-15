<!DOCTYPE html>

<?php require_once("codigoReutilizable/productos.php"); ?>
<html lang="en" dir="ltr">

  <?php require_once("codigoReutilizable/head.php");?>

  <body>
    <?php require_once("codigoReutilizable/nav.php"); ?>
    <div class="div-general-detalle-producto">
      <!-- Navigation -->

      <div class="titulo-detalle-producto">
        <h3>Detalle del producto</h3>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 text-center imagen-producto-detalle ">
            <img src=<?php echo $productos[$_GET["prod"]]["imagen"];  ?> alt="Imagen">
          </div>
          <div class="col-lg-8 ">
            <p class="parrafo-detalle"><?php echo $productos[$_GET["prod"]]["Nombre"];  ?></p>
            <h4><?php echo $productos[$_GET["prod"]]["Nombre"]; ?></h4>
            <h1>$ <?php echo $productos[$_GET["prod"]]["precio"];  ?></h1>
            <button type="button" class="btn btn-primary btn-lg"><img src="img/icono-carrito.png" alt="">Agregar al carrito</button>
            <p>El Precio Internet corresponde al precio para el pago en 1 (una) cuota con tarjeta de crédito.
              Precios válidos para venta web y telefónica, no aplican al local de venta. Precios validos solamenta para
              venta web o telefonica. NO PARA VENTA EN EL LOCAL</p>
          </div>
      </div>
      </div>
      <br>
      <br>
      <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              DESCRIPCION PRODUCTO
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <?php echo $productos[$_GET["prod"]]["descripcion"];  ?>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              MEDIDAS PRODUCTOS
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <ul class="items-datos-products">
              <li>Ancho: <?php  ?></li>
              <li>Largo: <?php  ?></li>
              <li>Peso: <?php  ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
      <!-- Footer-->
      <?php require_once("codigoReutilizable/footer.php"); ?>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
