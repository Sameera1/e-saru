<?php require_once("../resources/config.php");?>

<?php include(TEMPLATE_FRONT . DS ."header.php")?>

<?php 

    if(isset($_SESSION['product_1'])){
        
        echo $_SESSION['product_1'];
        
    }

?>

    <!-- Page Content -->
    <div class="container"> 

<div class="row">
<h4 class="text-center bg-danger"><?php display_message(); ?></h4>
      <h1>Checkout</h1>

<form action="">
    <table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>
     
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>apple</td>
                <td>$23</td>
                <td>3</td>
                <td>2</td>
                <td><a href="cart.php?remove=1">Remove</a></td>
                <td><a href="cart.php?delete=1">Delete</a></td>
            </tr>
        </tbody>
    </table>
</form>



<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount">4</span></td>
</tr>
<tr class="shipping">
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>

<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount">$3444</span></strong> </td>
</tr>




</table>

</div><!-- CART TOTALS-->


 </div><!--Main Content-->

    </div>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT . DS ."footer.php")?>