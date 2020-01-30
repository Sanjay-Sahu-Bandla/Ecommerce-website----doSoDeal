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

	if(mysqli_num_rows($query)>0) {

		while ($record = mysqli_fetch_array($query)) {

			$record['email'];
			$record['password'];

			if(($record['email'] == $_POST['login-email'])&&($record['password'] == $_POST['login-password'])) {


				$user = 'user';
				$_SESSION['user'] = $user;
				$userName = $record['first_name'];

				// echo $userName;

				$userG = 'Greetings';

				setcookie($user, $userName, time() + (86400), '/');
				setcookie($userG, $userName, time() + (5), '/');

				header('location:../index.php');

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


?>