<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="checkout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="row">
        <div class="col-75">
          <div class="container">
            <form action="/action_page.php">
      
              <div class="row">
                <div class="col-50">
                  <h1>Billing Address</h1>
                  <br>
                  <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                  <input type="text" id="fname" name="firstname" placeholder="">
                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" id="email" name="email" placeholder="">
                  <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                  <input type="text" id="adr" name="address" placeholder="">
                  <label for="adr"><i class="fa fa-address-card-o"></i>Landmark(optional)</label>
                  <input type="text" id="adr" name="address" placeholder="">
                  <label for="city"><i class="fa fa-institution"></i> City</label>
                  <input type="text" id="city" name="city" placeholder="">
      
                  <div class="row">
                    <div class="col-50">
                      <label for="state">State</label>
                      <input type="text" id="state" name="state" placeholder="">
                    </div>
                    <div class="col-50">
                      <label for="zip">Pincode</label>
                      <input type="text" id="zip" name="zip" placeholder="">
                    </div>
                  </div>
                  <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Billing address same as Shipping address
                  </label>
                  <div>
                   <a href="order_success.php" class="check-btn">Place Order</a>
            
                  </div>
                </form>
              </div>
                </div>
</div>
      
               
    
</body>
</html>