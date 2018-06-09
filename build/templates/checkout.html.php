<div class="cart">
  <h1 class="title">Checkout</h1>

  <form id="contact-form" action="" method="post" novalidate>
      <h2>Delivery details</h2>
 
    <fieldset>
        <legend>Delivery details</legend>
        <p>
            <label for="firstName">First name: &#42;</label>
            <input type="text" name="firstName" id="firstName">
        </p>
        <p>
            <label for="lastName">Last name: &#42;</label>
            <input type="text" name="lastName" id="lastName">
        </p>
        <p>
            <label for="address">Address: &#42;</label>
            <input type="address" name="address" id="address">
        </p>
        <p>
            <label for="phone">Contact number: &#42;</label>
            <input type="text" name="phone" id="phone">
        </p>
        <p>
            <label for="email">Email: &#42;</label>
            <input type="email" name="email" id="email">
        </p>
    </fieldset>
              <h2>Payment methord</h2>

    <fieldset>
        <legend>Credit or Debit Card</legend>
        <p>
            <label for="creditcard">Card number: &#42;</label>
            <input type="text" name="creditcard" id="creditcard">
        </p>
        <p>
            <label for="nameOnCard">Account holder: &#42;</label>
            <input type="text" name="nameOnCard" id="nameOnCard">
        </p>
        <p>
            <label for="expiry">Expiration: &#42;</label>
            <input type="text" name="expiry" id="expiry">
        </p>
        <p>
            <label for="csv">CSV: &#42;</label>
            <input type="text" name="csv" id="csv">
        </p>
        <p>
          <input type="checkbox" name="agree" id="agree"><label for="agree">I&#39;v read and accept the terms &#38; conditions &#42;</label>
        </p>       
    </fieldset>    
    <p><button class='button is-primary'>Checkout</button></p>
  </form>
</div>


