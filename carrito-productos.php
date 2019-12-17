<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php require_once("codigoReutilizable/head.php") ?>
  <body>
    <?php require_once("codigoReutilizable/nav.php") ?>
    <div class="container">
<!-- Page Heading -->
<div class="row">
  <div class="col-12">
    <h1 class="page-header">Shopping Cart</h1>
  </div>
</div>
<!-- /.row -->



<!-- Cart Table -->
<div class="row">
  <div class="col-lg-8 mb-4">
    <form id="cart-update-form" method="post" action="/cart/update">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Product</th>
              <th class="mob-hide"></th>
              <th class="mob-hide">Unit Price</th>
              <th class="table-qty">Qty</th>
              <th>Subtotal</th>
              <th></th>
            </tr>
          </thead>
          <tr>
            <td>
              <h3>Wacom Bamboo Tablet</h3>
              <small>color: Grey</small><br>
            </td>
            <td class="text-center mob-hide">
              <a href="/wacom-tablet" class="trsn" title="Wacom Bamboo Tablet">
                <img src="https://cdnx.jumpseller.com/bootstrap/image/429444/resize/120/150?1439529365" alt="Wacom Bamboo Tablet" title="Wacom Bamboo Tablet">
              </a>
            </td>
            <td class="mob-hide">
              <span class="order-product-price">$100.000</span>
            </td>
            <td>
              <select class="select select-qty form-control" name="16274655" title="Qty" onchange="$('#cart-update-form').submit();return false;">
                <option value="1" >1</option>
                <option value="2" selected="selected">2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="6" >6</option>
                <option value="7" >7</option>
                <option value="8" >8</option>
                <option value="9" >9</option>
                <option value="10" >10</option>
              </select>
            </td>
            <td>
              <span class="order-product-subtotal">$200.000</span>
            </td>
            <td clas="text-right"> <a href="/cart/remove_product/16274655" class="cart-product-remove" title="Remove Product"><i class="fas fa-times-circle"></i></a></td>
          </tr>
        </table>
      </div>
    </form>


    <hr class="my-3">
    <div class="row">

      <div class="cart-discount text-center col-md-6 offset-md-3">
        <div class="card">
          <div class="card-body">
            <h4>Have a discount code?</h4>
            <form action="/cart/coupon" accept-charset="UTF-8" id="coupon_form" autocomplete="off" method="post">  <input id="coupon_code" name="code" type="text" class="text"/>
              <input id="set_coupon_code_button" type="submit" value="Apply"/>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>

    <?php require_once("codigoReutilizable/footer.php") ?>
  </body>
</html>
