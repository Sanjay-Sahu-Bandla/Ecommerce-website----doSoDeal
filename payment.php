<?php

session_start();

if(isset($_POST['first_name'])&&($_POST['last_name'])&&($_POST['phone'])&&($_POST['email'])&&($_POST['address'])&&($_POST['state'])&&($_POST['city'])&&($_POST['pincode'])&&($_POST['name_on_card'])&&($_POST['debit_card_no'])&&($_POST['expire'])&&($_POST['cvv'])) {

  $_SESSION['emptyCart'] = 'empty';

    // echo '<script>alert()</script>';

}

$user = 'user';
$userG = 'Greetings';

include_once('Database/db.php');

if(isset($_COOKIE['user_id'])) {

  $userId = $_COOKIE['user_id'];

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="Author" description="Sanjay Sahu Bandla">

  <title>eCommerce Website - doSoDeal</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="http://localhost/Ecommerce%20website%20--%20doSoDeal/style.css">
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

  <!-- Font Awesome JS -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- JS, Popper.js, and jQuery - Bootstrap-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <!-- paypal -->
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->

  <!-- custom js control -->
  <script type="text/javascript" src="control.js"></script>

    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


  <style type="text/css">
    body {
      font-family: 'Varela Round', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .modal-confirm {    
      color: #636363;
      /*min-width: 325px;*/
      /*margin: 30px;*/
    }
    .modal-confirm .modal-header {
      border-bottom: none;   
      position: relative;
    }
    .modal-confirm .modal-title {
      text-align: center !important;
      font-size: 26px;
      margin-top: 30px;
      /*margin: 30px 0 -15px;*/
    }
    .modal-confirm .form-control, .modal-confirm .btn {
      min-height: 40px;
      border-radius: 3px; 
    }
    .modal-confirm .close {
      position: absolute;
      top: -5px;
      right: -5px;
    } 
    .modal-confirm .modal-footer {
      border: none;
      text-align: center;
      border-radius: 5px;
      font-size: 13px;
    } 
    .modal-confirm .icon-box {
      color: #fff;    
      position: absolute;
      margin: 0 auto;
      left: 0;
      right: 0;
      top: -70px;
      width: 95px;
      height: 95px;
      border-radius: 50%;
      z-index: 9;
      background: #82ce34;
      padding: 15px;
      text-align: center;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    }
    .modal-confirm .icon-box i {
      font-size: 58px;
      position: relative;
      top: -5px;
      left: 2px;
      display: flex;
      align-items: center;
    }
    .modal-confirm.modal-dialog {
      margin-top: 80px;
    }
    .modal-confirm .btn {
      color: #fff;
      border-radius: 4px;
      background: #82ce34;
      text-decoration: none;
      transition: all 0.4s;
      line-height: normal;
      border: none;
    }
    .modal-confirm .btn:hover, .modal-confirm .btn:focus {
      background: #6fb32b;
      outline: none;
    }

  </style>


</head>

<body class="">

  <!-- paypal -->

  <script
    src="https://www.paypal.com/sdk/js?client-id=SB_CLIENT_ID"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>
  <div id="paypal-button-container"></div>


  <script>
    paypal.Buttons().render('#paypal-button-container');
    // This function displays Smart Payment Buttons on your web page.
  </script>

  <?php include_once("Database/db.php"); ?>
  <?php include_once("Database/operations.php"); ?>

  <div class="row container m-4 d-flex" id="payment">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">

          <?php

              // global $disable,$Cid,$Ccat;
          $number = 0;

          if(isset($_COOKIE['PidAndCartName'])) {

            foreach ($_COOKIE['PidAndCartName'] as $name => $value) {
              $name = htmlspecialchars($name);
              $value = htmlspecialchars($value);

              $number++;

            }
          }

          echo $number;

          ?>

        </span>
      </h4>
      <ul class="list-group mb-3">

       <?php

       global $sum,$Cid,$Ccat;

       if(isset($_COOKIE['PidAndCartName'])) {

        foreach ($_COOKIE['PidAndCartName'] as $name => $value) {
         $name = htmlspecialchars($name);
         $value = htmlspecialchars($value);

         $Cid = $name[0];
         $Ccat = substr($name, 2);

         echo '<span id="Cid" class="d-none">'.$Cid.'</span>';
         echo '<span id="Ccat" class="d-none">'.$Ccat.'</span>';

         $sql = "SELECT *, SUM(price) AS total_money FROM $Ccat WHERE id = '$Cid'";
         $query = mysqli_query($con,$sql);

         if(mysqli_num_rows($query) > 0) {

          while ($record = mysqli_fetch_array($query)) {

            $total = $record['total_money'];

            $sum += $total;

            global $cartPrice, $cartTitle;

            $cartPrice = $record['price'];
            $cartTitle = $record['title'];
            $cartCategory = $record['category'];

            echo '<li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
            <h6 class="my-0">'.$cartTitle.'</h6>
            <small class="text-muted">'.$cartCategory.'</small>
            </div>
            <span class="text-muted"><span class="mr-1">&#8377;</span>'.number_format($cartPrice).'</span>
            </li>';

          }}}}

          ?>

          <li class="list-group-item d-flex justify-content-between">
            <span>Total (INR)</span>
            <strong><span class="mr-1">&#8377;</span><?php echo number_format($sum) ?></strong>
          </li>
        </ul>

        <div class="card p-2">
          <div class="input-group">
            <input id="promoCode" type="text" class="form-control" placeholder="Promo code">
            <div class="input-group-append" required>
              <button type="button" class="btn btn-white text-white" style="background: #17a2b8;" onclick="redeem()">Redeem</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" method="post" action="" onsubmit="return deleteCookies()">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required name="first_name">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required name="last_name">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="username">Phone</label><small class="ml-2 text-muted">(with country code)</small>
            <input type="number" class="form-control" id="username" placeholder="+91 99080 86610" required name="phone">
            <div class="invalid-feedback" style="width: 100%;">
              Your number is required.
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" required="" name="email">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required name="address">
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="state">State</label>
              <select name="state" class="custom-select d-block w-100" id="state" required>
                <option value="">Choose...</option>
                <option>Telangana</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="City">City</label>
              <select name="city" class="custom-select d-block w-100" id="City" required>
                <option value="">Choose...</option>
                <option>Nizamabad</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid City.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="pincode">Pincode</label>
              <input type="text" class="form-control" id="pincode" placeholder="" required name="pincode">
              <div class="invalid-feedback">
                Pincode code required.
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="same-address">
            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">Save this information for next time</label>
          </div>
          <hr class="mb-4">

          <h4 class="mb-3">Payment</h4>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required name="name_on_card">
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">Debit card number</label>
              <input type="number" class="form-control" id="cc-number" placeholder="" required name="debit_card_no">
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required name="expire">
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">CVV</label>
              <input type="number" class="form-control" id="cc-cvv" placeholder="" required name="cvv">
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <button class="btn btn-white btn-lg btn-block text-white" name="submit" type="submit" style="background: #17a2b8;">Continue to checkout</button>
        </form>
      </div>
    </div>

    <?php



    if(isset($_POST['first_name'])&&($_POST['last_name'])&&($_POST['phone'])&&($_POST['email'])&&($_POST['address'])&&($_POST['state'])&&($_POST['city'])&&($_POST['pincode'])&&($_POST['name_on_card'])&&($_POST['debit_card_no'])&&($_POST['expire'])&&($_POST['cvv'])) {

      $orderId = $_GET['order_id'];

      $firstName = $_POST['first_name'];
      $lastName = $_POST['last_name'];

      $phone = $_POST['phone'];
      $email = $_POST['email'];

      $address = $_POST['address'];

      $state = $_POST['state'];
      $city = $_POST['city'];
      $pincode = $_POST['pincode'];

      $name_on_card = $_POST['name_on_card'];
      $debit_card_no = $_POST['debit_card_no'];
      $expire = $_POST['expire'];
      $cvv = $_POST['cvv'];

      $j = 0;

      if(isset($_COOKIE['PidAndCartName'])) {

        foreach ($_COOKIE['PidAndCartName'] as $name => $value) {
         $name = htmlspecialchars($name);
         $value = htmlspecialchars($value);

         // $sql2 = "SELECT *, SUM(price) AS total_money FROM $Ccat WHERE id = '$Cid'";
         // $query2 = mysqli_query($con,$sql2);

         // if(mysqli_num_rows($query2) > 0) {

         //  while ($record = mysqli_fetch_array($query2)) {

         //    $total = $record['total_money'];

         //    $sum += $total;

         //    global $cartPrice, $cartTitle;

         //    $cartPrice = $record['price'];
         //    $cartTitle = $record['id'];
         //    $cartCategory = $record['category'];

         //    global $query;

            $sql = array();
            $query = array();

            $product_id = $name[0];
            $product_category = substr($name, 2);

            $sql[$j] = "INSERT INTO orders VALUES('$orderId','$userId','$firstName', '$lastName', '$phone', '$email', '$address', '$state', '$city', '$pincode', '$name_on_card','$debit_card_no','$expire','$cvv','$product_id','$product_category','$sum',CURRENT_TIMESTAMP)";

            $query = mysqli_query($con,$sql[$j]);

            $j++;
          // }
        // }

      }

      if(!$query) {
       echo "<script>alert('Your order placed successfully. Check them in your orders section !');
       window.location = '/Ecommerce%20website%20--%20doSoDeal/index.php';</script>";
     }

     else {

      echo '

      <div class="text-center">



      <!-- Button HTML (to Trigger Modal) -->
      <a href="#myModal" id="directToHome" class="d-none trigger-btn" data-toggle="modal" id=
      confirm>Click to Open Confirm Modal</a>
      </div>

      <!-- Modal HTML -->
      <div id="myModal" class="modal fade">
      <div class="modal-dialog modal-confirm">
      <div class="modal-content mw-100">
      <div class="modal-header">
      <div class="icon-box">
      <i class="material-icons">&#10004;</i>
      </div>        
      <div class="modal-title text-center mx-auto">Awesome!</div> 
      </div>
      <div class="modal-body">
      <p class="text-center">Your order has been placed successfully. Click ok to go back to the home page.</p>
      </div>
      <div class="modal-footer">
      <div href="http://localhost/Ecommerce%20website%20--%20doSoDeal/" class="d-flex align-items-center justify-content-center btn btn-success btn-block" data-dismiss="modal" onclick="deleteCookies()">OK</div>
      </div>
      </div>
      </div>
      </div>     ';

    }

  }
}

mysqli_close($con);

?>

<script type="text/javascript">

  function redeem() {

    var promoCode = $('#promoCode').val();

    if(promoCode != '') {
      alert('Enter valid promo code');
    }

    else {
      alert('Promo code is required');
    }

  }

  $(document).ready(function() {

    $('#directToHome').click();
  });

  function deleteCookies() {

    document.cookie.split(";").forEach(function(c) {
      var date = new Date();
      date.setTime(date.getTime()+(10*1000));
      var expires = "; expires="+date.toGMTString();


      
        // document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + date.toGMTString() + ";path=/"); 
        window.location = '/Ecommerce%20website%20--%20doSoDeal/index.php';
      });
  }

</script>

</body>

</html>