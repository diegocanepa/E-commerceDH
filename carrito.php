
<?php
require_once("codigoReutilizable/funciones.php");
iniciarSesion();
verificarLogout();
  $total = 0;
  $carro = [];
  if (isset($_SESSION["idProductos"])) {
    $carro = $_SESSION["idProductos"];
  }

  if ($_POST) {
    //inicio pagar
    if (isset($_POST["pagar"])) {
        unset($_SESSION["idProductos"]);
        $carro = [];
        header('Location: exito.php');
    }
    //fin pagar - inicio agregar
    if (isset($_POST["agregar"])) {
        header('Location: productos.php');
    }

    //fin agregar - inicio cancelar
    if($_POST["cancelar"]){
        unset($_SESSION["idProductos"]);
        $carro = [];
        header('Location: home.php');
    }
  }
?>
<?php require_once("codigoReutilizable/productos.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php require_once("codigoReutilizable/head.php");?>
  <body>
  <?php require_once("codigoReutilizable/nav.php"); ?>

    <div class="container">
      <div class="row">
        <div class="jumbotron text-center titulo-carro">
            <h1>Productos del carro</h1>
        </div>
        <form class="formulario" action="carrito.php" method="post">
          <?php if (isset($carro) && count($carro) != 0):?>
            <?php if(strlen($carro[0]) != 0):?>
              <table class="egt" style="width:100%">
                <thead>
                  <tr class="title">
                    <th scope="row" colspan="2">Producto</th>
                    <th scope="row">Precio</th>
                  </tr>
                </thead>
                <?php foreach($carro as $item): ?>
                  <tbody>
                    <tr>
                      <td><img src="<?php echo $productos[$item]["imagen"];?>" alt=""></td>
                      <td><?php echo $productos[$item]["Nombre"];?></td>
                      <td><?php echo "$" . $productos[$item]["precio"];?></td>
                      <?php $total = $total + $productos[$item]["precio"]?>
                    </tr>
                  </tbody>
                <?php endforeach; ?>
                <tfoot>
                  <tr>
                    <th scope="row" colspan="2">Total</th>
                    <th><?php echo "$$total"; ?></th>
                  </tr>
                </tfoot>

              </table>
              <br>
                <div class="col-md-4 btn-group">
                  <input type="submit" name="agregar" value="Agregar más productos">
                  <input type="submit" name="pagar" value="Comprar">
                  <input type="submit" name="cancelar" value="Cancelar compra">
                </div>

            <?php endif; ?>
          <?php else: ?>
            <div class="jumbotron text-center">
                <h2>No hay ningun articulo en el carrito</h2>
            </div>
          <?php endif; ?>

        </form>
      </div>
    </div>
  </body>
</html>
