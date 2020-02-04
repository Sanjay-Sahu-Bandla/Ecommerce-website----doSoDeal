<?php

$user = 'user';
$userG = 'Greetings';

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

    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- jQuery Custom Scroller CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- custom js control -->
    <script type="text/javascript" src="http://localhost/Ecommerce%20website%20--%20doSoDeal/control.js"></script>


</head>

<body>

	<?php include_once("Database/db.php"); ?>
	<?php include_once("Database/operations.php"); ?>

	<?php include_once("assets/Login.php"); ?>



	<!-- Navigation Bar -->
	<?php include_once('assets/navbar.php') ?>

	<?php

	$Pid = $_GET['id'];
	$cat = $_GET['cat'];

	getProductDetails($con,$Pid,$cat);

	?>


	<div class="container-fluid my-2">

		<div class="row p-0 m-0">

			<div class="col-sm-4 m-0">
				<div style="position: sticky;top:;"><img src="data:image/jpeg;base64,<?php echo base64_encode($image); ?>" class="w-100"></div>
				<div class="row p-2 m-0 d-flex justify-content-center">
					<div class="btn-group w-100">
						<button onclick="countCart()" class="col-sm-6 col-12 text-center btn btn-lg btn-success" style="font-size: 15px;"><i  class="fas fa-shopping-cart p-0 mr-2"></i>ADD TO CART</button>
						<a class="text-white col-sm-6 col-12 text-center btn btn-lg btn-danger" style="font-size: 15px;"> <i  class="fas fa-shopping-cart p-0 mr-2"></i>BUY NOW</a>
					</div>
				</div>
			</div>
			<div class="col-sm-8 p-0 m-0">
				<div class=" m-0 p-3">
					<h2 class="font-weight-normal"><?php echo $title; ?></h2>

					<p><span class="badge badge-success mr-2">4.7</span><small class="text-muted">387 Rating & 76 Reviews</small></p>

					<h5>Price</h5><h4 class="">$ <?php echo number_format($price); ?></h4><br>

					<div class="text-dark">
						<h6 class="">Availabale offers</h6>
						<p><i  class="fas fa-shopping-cart p-0 mr-2"  style="color: #17a2b8;"></i>Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit Card</p>
						<p><i  class="fas fa-shopping-cart p-0 mr-2"  style="color: #17a2b8;"></i>Bank OfferExtra 5% off* with Axis Bank Buzz Credit Card</p>
						<p><i  class="fas fa-shopping-cart p-0 mr-2"  style="color: #17a2b8;"></i>Get upto ₹14050 off on exchange</p>
						<p><i  class="fas fa-shopping-cart p-0 mr-2"  style="color: #17a2b8;"></i>Special PriceExtra ₹16000 discount(price inclusive of discount)</p>
						<p><i  class="fas fa-shopping-cart p-0 mr-2"  style="color: #17a2b8;"></i>No cost EMI ₹2,500/month. Standard EMI also available</p><br>
					</div><hr>

					<div class="row">
						<div class="col-3 text-muted">Warranty</div>
						<div class="col-9">Brand Warranty of 1 Year Available for Mobile</div>
					</div><br>
					<div class="row">
						<div class="col-3 text-muted">Color</div>
						<div class="col-9">Navy Blue</div>
					</div><br>
					<div class="row">
						<div class="col-3 text-muted">ROM I ROM</div>
						<div class="col-9">8 GB RAM I 128 GB ROMH</div>
					</div><br>
					<div class="row">
						<div class="col-3 text-muted">Highlights</div>
						<div class="col-9">
							<ul style="list-style-type: circle;">
								<li>6 GB RAM | 128 GB ROM</li>
								<li>16.23 cm (6.39 inch) Display</li>
								<li>4000 mAh Battery</li>
								<li>SM855 (Qualcomm Snapdragon Premium Tier) Processor</li>
								<li>48MP + 12MP | 20MP Front Camera</li>
							</ul>
						</div>
					</div>

				</div>    			
			</div>

		</div>

	</div> <!-- Container -->

	<!-- Footer -->

	<?php include_once('assets/footer.php') ?>

</div> <!-- End of the page -->



<div class="overlay"></div>


    <!-- custom js control -->
    <script type="text/javascript" src="control.js"></script>
<script type="text/javascript">

	var arr = ['<?php echo $Pid ?>','<?php echo $cat ?>'];
	var PidAndCart = JSON.stringify(arr);

	var arr = arr[0]+'f'+arr[1];

	// var PidAndCart = PidAndCart.replace('"', '.');
	// var PidAndCart = PidAndCart.replace(/[&\/\\#, +()$~%.'":*?<>{}]/g, 'f'); 

	var cartValue = $('#countingCart').html();
	var i = 0;

	function countCart() {

		var productDataD = getCookie('PidAndCartName'+"["+arr+"]");

		if(productDataD != '') {

			alert('already added to cart');
		}

		else {
			
			cartValue++;
			i++;

			$('#countingCart').html(cartValue);

			var d = new Date();

			d.setTime(d.getTime() + (10*24*60*60*1000));

			var expires = "expires="+ d.toUTCString();

			document.cookie = "currentCartValue =" + cartValue + ";" + expires + ";path=/";

			document.cookie = "PidAndCartName" + "["+arr+"]" +" =" + PidAndCart + ";" + expires + ";path=/";
		}
	}


	function getCookie(cname) {

		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');

		for(var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}

		return "";
	}


</script>
</body>
</html>