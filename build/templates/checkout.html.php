<?php 
  if(isset($_SESSION["cart"])):
  $cart = $_SESSION["cart"];
  $cartItems = $cart->getItems();
    if($cart->calculateTotal()>0):
?>
<div class="cart">
  <h1 class="title">Checkout</h1>
  <form id="contact-form" action="order-thanks.php" method="post" id="checkout">
      <h2>Delivery details</h2>
 
    <fieldset>
        <legend>Delivery details</legend>
        <p>
            <label for="firstName">First name: &#42;</label>
            <input type="text" name="firstName" id="firstName" required>
        </p>
        <p>
            <label for="lastName">Last name: &#42;</label>
            <input type="text" name="lastName" id="lastName" required>
        </p>
        <p>
            <label for="address">Address: &#42;</label>
            <input type="address" name="address" id="address" required>
        </p>
        <p>
            <label for="phone">Contact number: &#42;</label>
            <input type="text" name="phone" id="phone" required>
        </p>
        <p>
            <label for="email">Email: &#42;</label>
            <input type="email" name="email" id="email" required>
        </p>
    </fieldset>
              <h2>Payment methord</h2>

    <fieldset>
        <legend>Credit or Debit Card</legend>
        <p>
            <label for="creditcard">Card number: &#42;</label>
            <input type="text" name="creditcard" id="creditcard" required>
        </p>
        <p>
            <label for="nameOnCard">Account holder: &#42;</label>
            <input type="text" name="nameOnCard" id="nameOnCard" required>
        </p>
        <p>
            <label for="expiry">Expiration: &#42;</label>
            <input type="text" name="expiry" id="expiry" required>
        </p>
        <p>
            <label for="csv">CSV: &#42;</label>
            <input type="text" name="csv" id="csv" required>
        </p>
        <p>
          <input type="checkbox" name="agree" id="agree" required><label for="agree">I&#39;v read and accept the terms &#38; conditions &#42;</label>
        </p>       
    </fieldset>    
    <p><button class='button is-primary' type="submit" name="pay">Place order</button></p>
  </form>
</div>
<?php else: ?>
<i class="fa fa-shopping-cart fa-4x"></i>
<p>Your shopping cart is currently empty.</p>
<?php endif; ?>
<?php else: ?>
<i class="fa fa-shopping-cart fa-4x"></i>
<p>Your shopping cart is currently empty.</p>
<?php endif; ?>

