<?php
 ?>

<?php session_start();
  $total = 0;
  $carro = $_SESSION["idProductos"];
?>
<?php require_once("codigoReutilizable/productos.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php require_once("codigoReutilizable/head.php");?>
  <body>
    <?php require_once("codigoReutilizable/nav.php"); ?>

    <div class="container">
      <div class="row">
        <div class="titulo-carro">
          <h3>Productos en el carrito</h3>
        </div>
        <form class="formulario" action="exito.php" method="post">
          <?php if(strlen($carro[0]) != 0):?>
            <table style="width:100%">
            <tr class="title">
              <th>Foto</th>
              <th>Producto</th>
              <th>Precio</th>
            </tr>
            <?php foreach($carro as $item): ?>
            <tr>
              <th><?php echo $productos[$item]["imagen"];?></th>
              <th><?php echo $productos[$item]["Nombre"];?></th>
              <th><?php echo $productos[$item]["precio"];?></th>
              <?php $total = $total + $productos[$item]["precio"]?>
            </tr>
            <?php endforeach; ?>
            <tr>
              <th>Total</th>
              <th></th>
              <th><?php echo "$total"; ?></th>
            </tr>
            </table>
          <?php else: ?>
            <?php echo "No hay ningun articulo en el carrito";?>
          <?php endif;?>
          <div class="titulo-pago col-lg-12">
            <h4>Seleccione el metodo de pago</h4>
          </div>

          <div>
            <input type="radio" name="metodo-pago" value="p">Paypal
            <br>
            <input type="radio" name="metodo-pago" value="tc" checked>Tarjeta de crédito
            <br>
            <input type="radio" name="metodo-pago" value="td">Tarjeta de débito
          </div>
          <div class="">
          <input type="submit" name="" value="Efectuar pago">
          <button type="button" name="button">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
