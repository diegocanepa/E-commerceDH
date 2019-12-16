
<?php session_start();
  $total = 0;
  $carro = $_SESSION["idProductos"];

  if ($_POST) {
    if ($_POST["pagar"]) {
      session_destroy();
      header('Location: exito.php');
    }else {
      if ($_POST["cancelar"]) {
        session_destroy(); 
        header('Location: home.php');
      }
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
                  <th>Total</th>
                  <th></th>
                  <td><?php echo "$total"; ?></td>
                </tr>
              </tfoot>

            </table>
            <br>
            <div class="jumbotron text-center titulo-carro titulo-pago">
                <h1>Seleccione el metodo de pago</h1>
            </div>
            <div class="caja-pago align-item-center">
              <div class="col-md-4 radios">
                <input type="radio" name="metodo-pago" value="p">Paypal
                <br>
                <input type="radio" name="metodo-pago" value="tc" checked>Tarjeta de crédito
                <br>
                <input type="radio" name="metodo-pago" value="td">Tarjeta de débito
              </div>

              <div class="col-md-4 btn-group">
                <input type="submit" name="pagar" value="Efectuar pago">
                <input type="submit" name="cancelar" value="Cancelar">
              </div>
            </div>

          <?php else: ?>
            <div class="jumbotron text-center">
                <h2>No hay ningun articulo en el carrito</h2>
            </div>
          <?php endif;?>

        </form>
      </div>
    </div>
  </body>
</html>
