<?php

// session_start();

$user = 'user';
$userG = 'Greetings';

	// if(isset($_COOKIE['PidAndCartName'])) {

	// 	// $str = json_decode($_COOKIE['PidAndCartName'], true);
	//     foreach ($_COOKIE['PidAndCartName'] as $name => $value) {
	//         $name = htmlspecialchars($name);
	//         $value = htmlspecialchars($value);
	//         echo "$name : $value <br />\n";
	//     }
	// }
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

	<style type="text/css">
		
		.caret {
			height: 2px;
			background: red;
		}

	</style>

</head>

<body>

	<?php include_once("Database/db.php"); ?>
	<?php include_once("Database/operations.php"); ?>


	<!-- Navigation Bar -->
	<?php include_once('assets/navbar.php') ?>

	<div class="container-fluid my-2">

		<div class="row">
			<div class="col-sm-8 mt-1">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-muted mt-0">My cart</h5><hr>

						<div class="row">

							<?php

							if(isset($_COOKIE['PidAndCartName'])) {

								foreach ($_COOKIE['PidAndCartName'] as $name => $value) {
									$name = htmlspecialchars($name);
									$value = htmlspecialchars($value);

									// $name = str_replace(' ', '-', $name);
									// $value = str_replace(' ', '-', $value);

									// preg_replace('/[^A-Za-z0-9\-]/', '', $name);
									// preg_replace('/[^A-Za-z0-9\-]/', '', $value);

									// echo "$name[0]<br />\n";
									// echo substr($name, 2)." <br />\n";

									// $names = $name[0];
									// echo $names[1];

									$Cid = $name[0];
									$Ccat = substr($name, 2);


// Cart Dat

// function getProductData($con,$Cid,$Ccat) {

									$sql = "SELECT * FROM $Ccat WHERE id = '$Cid'";
									$query = mysqli_query($con,$sql);

									if(mysqli_num_rows($query) > 0) {

										while ($record = mysqli_fetch_array($query)) {

											global $cartPrice, $cartTitle;

											$cartPrice = $record['price'];
											$cartTitle = $record['title'];

											echo '<div class="col-sm-4">
											<img src="data:image/jpeg;base64,'. base64_encode($record['image']) .'" class="w-100">
											</div>
											<div class="col-sm-8">
											<h4>'.$record['title'].'</h4>
											<!-- <p><span class="badge badge-success mr-2">4.7</span><small class="text-muted">387 Rating & 76 Reviews</small></p> -->
											<p class="text-white badge badge-success">'.$record['category'].'</p>
											<p class="text-muted"><small>Seller : Sanjay Sahu Bandla</small></p>

											<h3>'.number_format($record['price']).'</h3><br>

											<div class="btn-group btn-group-sm">
											<input type="button" name="" class="btn btn-secondary" value="-" onclick="decrease()">
											<input type="number" name="noOfProducts" class="form-control form-control-sm btn btn-light w-50" value="1" id="noOfProducts">
											<input type="button" name="" class="btn btn-secondary" value="+" onclick="increase()">
											</div>
											</div><span class="caret"></span>';
										}
									}
// }


									// getProductData($con,$Cid,$Ccat);

								}					

							}

							?>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4 mt-1">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-muted">Total price</h5><hr>

						<table class="table table-borderless">
							<thead>
								<th>Products</th>
								<th>Total</th>
							</thead>
							<tr>

								<?php

								if(isset($_COOKIE['PidAndCartName'])) {

									foreach ($_COOKIE['PidAndCartName'] as $name => $value) {
										$name = htmlspecialchars($name);
										$value = htmlspecialchars($value);

										$Cid = $name[0];
										$Ccat = substr($name, 2);

										$sql = "SELECT *, SUM(price) AS total_money FROM $Ccat WHERE id = '$Cid'";
										$query = mysqli_query($con,$sql);

										global $sum;

										if(mysqli_num_rows($query) > 0) {

											while ($record = mysqli_fetch_array($query)) {
	
												$total = $record['total_money'];

												$sum += $total;

												global $cartPrice, $cartTitle;

												$cartPrice = $record['price'];
												$cartTitle = $record['title'];

												?>
												<td><?php echo $cartTitle; ?></td>
												<td><?php echo number_format($cartPrice); ?></td>
											</tr>
											<tr><?php }}}} ?>
											<td>Delivery Charges</td>
											<td>FREE</td>
										</tr>
										<tr>
											<td class="font-weight-bold">Total Payable Amount</td>
											<td class="font-weight-bold" style="color: #17a2b8;"><?php echo number_format($sum); ?></td>								
										</tr>
									</table>
									<div class="text-right">
										<a href="#" class="btn btn-primary btn-block" style="background: #17a2b8; border: none; outline: none;">Place Order</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div> <!-- Container --><br>

				<!-- Footer -->

				<?php include_once('assets/footer.php') ?>

			</div> <!-- End of the page -->



			<div class="overlay"></div>

			<script type="text/javascript">

				$(document).ready(function () {

					$("#sidebar").mCustomScrollbar({
						theme: "minimal"
					});

					$('#dismiss, .overlay').on('click', function () {
						$('#sidebar').removeClass('active');
						$('.overlay').removeClass('active');
					});

					$('#sidebarCollapse').on('click', function () {
						$('#sidebar').addClass('active');
						$('.overlay').addClass('active');
						$('.collapse.in').toggleClass('in');
						$('a[aria-expanded=true]').attr('aria-expanded', 'false');
					});
				});

	// var noOfProducts = $('.noOfProducts').val('16');

	function increase() {

		var noOfProducts = $('#noOfProducts').val();

		noOfProducts++;

		$('#noOfProducts').val(noOfProducts);
	}

	function decrease() {

		var noOfProducts = $('#noOfProducts').val();

		if(noOfProducts > 1) {

			noOfProducts--;

			$('#noOfProducts').val(noOfProducts);
		}
	}

	var i = 1;

	function change(value) {

		var noOfProducts = $(value).next().val();

		noOfProducts++;	

		$('.noOfProducts').html(noOfProducts);

		// $(value).next().html(i);

		// $('.noOfProducts').html(noOfProducts);

		// var total = noOfProducts + value;
		// noOfProducts = total;

		alert(noOfProducts);
		// $('.noOfProducts').eq(this).val(noOfProducts);

	}

</script>
</body>
</html>