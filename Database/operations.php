<?php

// Displaying rows on home page from databse 

function getMobilesData($con) {

	$sql = "SELECT * FROM mobiles";
	$query = mysqli_query($con,$sql);

	if(mysqli_num_rows($query) > 0) {

		while ($record = mysqli_fetch_array($query)) {

			echo '<a href="product/' . $record['id'] . '/mobiles" class="col-md-2 col-sm-4 d-flex align-items-stretch m-0 pr-0">
			<div class="card border-0 mb-2"><img src="data:image/jpeg;base64,'. base64_encode($record['image']) .'" class="card-img-top my-0" alt="...">
			<div class="card-body text-center">
			<div class="font-weight-bloder card-title my-0 mx-0 px-0">'.add3dots($record['title'],"...",9).'</div>
			<div class="card-text text-success my-0"><i class="mr-1 fas fa-rupee-sign"></i> '. number_format($record['price']) .'</div>
			<p class="card-text my-0 text-muted" style="font-size: ">'. $record['category'] .'</p>
			</div>
			</div>
			</a>';
		}
	}
}

function getClothesData($con) {

	$sql = "SELECT * FROM clothes";
	$query = mysqli_query($con,$sql);

	if(mysqli_num_rows($query) > 0) {

		while ($record = mysqli_fetch_array($query)) {

			echo '<a href="product/' . $record['id'] . '/clothes" class="col-md-2 col-sm-4 d-flex align-items-stretch m-0 pr-0">
			<div class="card border-0 mb-2"><img src="data:image/jpeg;base64,'. base64_encode($record['image']) .'" class="card-img-top my-0" alt="...">
			<div class="card-body text-center">
			<div class="font-weight-bloder card-title my-0 mx-0 px-0">'.add3dots($record['title'],"...",9).'</div>
			<div class="card-text text-success my-0"><i class="mr-1 fas fa-rupee-sign"></i> '. number_format($record['price']) .'</div>
			<p class="card-text my-0 text-muted" style="font-size: ">'. $record['category'] .'</p>
			</div>
			</div>
			</a>';
		}
	}
}

function getAccessoriessData($con) {

	$sql = "SELECT * FROM accessories";
	$query = mysqli_query($con,$sql);

	if(mysqli_num_rows($query) > 0) {

		while ($record = mysqli_fetch_array($query)) {

			echo '<a href="product/' . $record['id'] . '/accessories" class="col-md-2 col-sm-4 d-flex align-items-stretch m-0 pr-0">
			<div class="card border-0 mb-2"><img src="data:image/jpeg;base64,'. base64_encode($record['image']) .'" class="card-img-top my-0" alt="...">
			<div class="card-body text-center">
			<div class="font-weight-bloder card-title my-0 mx-0 px-0">'.add3dots($record['title'],"...",9).'</div>
			<div class="card-text text-success my-0"><i class="mr-1 fas fa-rupee-sign"></i> '. number_format($record['price']) .'</div>
			<p class="card-text my-0 text-muted" style="font-size: ">'. $record['category'] .'</p>
			</div>
			</div>
			</a>';
		}
	}
}

function add3dots($string, $dots, $limit) {

	if(strlen($string)>$limit) {

		return substr($string, 0, $limit) . $dots;
	}

	else {
		return $string;
	}
}

// Product Details

function getProductDetails($con,$Pid,$cat) {

	$sql = "SELECT * FROM $cat WHERE id = $Pid";
	$query = mysqli_query($con,$sql);

	if(mysqli_num_rows($query) > 0) {

		while ($record = mysqli_fetch_array($query)) {

			global $id, $title, $price, $image;

			$id = $record['id'];
			$title = $record['title'];
			$price = $record['price'];
			$image = $record['image'];

		}
	}
}

// Login Form

if(isset($_POST['login-email'])&&isset($_POST['login-password'])) {

	include("db.php"); 

	$_POST['login-email'];
	$_POST['login-password'];

	$sql = "SELECT *FROM users ";
	$query = mysqli_query($con,$sql);

	$i = 0;

	if(mysqli_num_rows($query)>0) {

		while ($record = mysqli_fetch_array($query)) {

			$record['email'];
			$record['password'];

			if(($record['email'] == $_POST['login-email'])&&($record['password'] == $_POST['login-password'])) {


				$user = 'user';
				$userName = $record['first_name'];
				$user_id = $record['id'];

				// echo $userName;

				$userG = 'Greetings';

				setcookie('user_id', $user_id, time() + (86400), '/');
				setcookie($user, $userName, time() + (86400), '/');
				setcookie($userG, $userName, time() + (2), '/');

				header('location:/Ecommerce%20website%20--%20doSoDeal/index.php');

			}

			else {

				if($i == 0){

					echo "<script>alert('invalid mail id or password')</script>";

					header('location:../index.php?valid=invalid');

					$i=1;
				}
			}
			
		}
	}

	else {
		echo "something went wrong";
	}

}

// Sign up Form

if(isset($_POST['mail'])&&isset($_POST['password'])) {

	include("db.php"); 

	$id = $_POST['id'];
	
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];

	$email = $_POST['mail'];
	$password = $_POST['password'];

	$address = $_POST['address'];

	$city = $_POST['city'];
	$state = $_POST['state'];
	$pincode = $_POST['pincode'];

	$sql = "INSERT INTO users VALUES('$id', '$firstName', '$lastName', '$email', '$password', '$address', '$city', '$state', '$pincode')";
	$query = mysqli_query($con,$sql);

	if(!$query) {
		echo "Something went wrong !";
	}

	else {

		$user = 'user';
		$_SESSION['user'] = $user;
		$userName = $_POST['firstName'];

		$userG = 'Greetings';

		setcookie($user, $userName, time() + (86400), '/');
		setcookie($userG, $userName, time() + (5), '/');

		header('location:../index.php');

	}

}

// getting order details

function getOrderDetails($con,$user_id) {

	global $con;

	$sql = "SELECT *FROM orders WHERE user_id = '$user_id' ORDER BY ordered_time DESC";
	$query = mysqli_query($con,$sql);

	if(mysqli_num_rows($query)>0) {

		while ($record = mysqli_fetch_array($query)) {

			$ordered_time = $record['ordered_time'];
			$product_id = $record['product_id'];
			$product_category = $record['product_category'];

			$sql2 = "SELECT * FROM $product_category WHERE id = '$product_id'";
			$query2 = mysqli_query($con,$sql2);

			if (!$query2) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

			if(!$query2 || mysqli_num_rows($query2) > 0) {

				while ($record2 = mysqli_fetch_array($query2)) {

					// global $id, $title, $price, $image;

					$id = $record2['id'];
					$title = $record2['title'];
					$price = $record2['price'];
					$image = $record2['image'];

					echo '<div class="card p-3 m-2 mb-3" style="max-width: 100%; ">
					<div class="row no-gutters">
					<div class="col-md-2">
					<img src="data:image/jpeg;base64,'. base64_encode($image) .'" class = "card-img img-responsive w-100   " alt="...">
					</div>
					<div class="col-md-10">
					<div class="card-body">
					<h5 class="card-title">'.$title.'</h5>
					<span class="mr-1">&#8377;</span>'.number_format($price).'
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text"><small class="text-muted">

					Ordered on '.$ordered_time.'

					</small></p>
					</div>
					</div>
					</div>
					</div>';

				}
			}

		}
	}

	else {

		echo '<div class="card mx-2">
		<div class="card-body">

		You have not ordered any products yet !

		</div>

		</div>';
	}

}

function getProductsByCategory($con,$cat) {

	$sql = "SELECT * FROM $cat";
	$query = mysqli_query($con,$sql);

	if(mysqli_num_rows($query) > 0) {

		while ($record = mysqli_fetch_array($query)) {

			echo '<a href="http://localhost/Ecommerce%20website%20--%20doSoDeal/product/' . $record['id'] . '/'.$record['category'].'" class="col-6 col-md-2 card m-md-2 m-sm-1">
				<img class="card-img-top mt-1" src="data:image/jpeg;base64,'. base64_encode($record['image']) .'" alt="Card image cap">
				<div class="card-body">
					<p class="card-text mb-1">'.add3dots($record['title'],"...",9).'</p>
					<div class="card-text text-success my-0"><i class="mr-1 fas fa-rupee-sign"></i>'. number_format($record['price']) .'</div>
			<p class="card-text text-muted my-0 text-muted" style="font-size: 16px">mobiles</p>
				</div>
			</a>';
		}
	}

}

?>