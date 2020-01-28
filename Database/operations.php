<?php

function getMobilesData($con) {

	$sql = "SELECT * FROM mobiles";
	$query = mysqli_query($con,$sql);

	if(mysqli_num_rows($query) > 0) {

		while ($record = mysqli_fetch_array($query)) {

			echo '<div class="col-md-2 col-sm-4 d-flex align-items-stretch m-0 pr-0">
			<div class="card border-0 mb-2"><img src="data:image/jpeg;base64,'. base64_encode($record['image']) .'" class="card-img-top my-0" alt="...">
			<div class="card-body text-center">
			<div class="font-weight-bloder card-title my-0 mx-0 px-0">'.add3dots($record['title'],"...",9).'</div>
			<div class="card-text text-success my-0"><i class="mr-1 fas fa-rupee-sign"></i> '. number_format($record['price']) .'</div>
			<p class="card-text my-0 text-muted" style="font-size: ">'. $record['category'] .'</p>
			</div>
			</div>
			</div>';
		}
	}
}

function getClothesData($con) {

	$sql = "SELECT * FROM clothes";
	$query = mysqli_query($con,$sql);

	if(mysqli_num_rows($query) > 0) {

		while ($record = mysqli_fetch_array($query)) {

			echo '<div class="col-md-2 col-sm-4 d-flex align-items-stretch m-0 pr-0">
			<div class="card border-0 mb-2"><img src="data:image/jpeg;base64,'. base64_encode($record['image']) .'" class="card-img-top my-0" alt="...">
			<div class="card-body text-center">
			<div class="font-weight-bloder card-title my-0 mx-0 px-0">'.add3dots($record['title'],"...",9).'</div>
			<div class="card-text text-success my-0"><i class="mr-1 fas fa-rupee-sign"></i> '. number_format($record['price']) .'</div>
			<p class="card-text my-0 text-muted" style="font-size: ">'. $record['category'] .'</p>
			</div>
			</div>
			</div>';
		}
	}
}

function getAccessoriessData($con) {

	$sql = "SELECT * FROM accessories";
	$query = mysqli_query($con,$sql);

	if(mysqli_num_rows($query) > 0) {

		while ($record = mysqli_fetch_array($query)) {

			echo '<div class="col-md-2 col-sm-4 d-flex align-items-stretch m-0 pr-0">
			<div class="card border-0 mb-2"><img src="data:image/jpeg;base64,'. base64_encode($record['image']) .'" class="card-img-top my-0" alt="...">
			<div class="card-body text-center">
			<div class="font-weight-bloder card-title my-0 mx-0 px-0">'.add3dots($record['title'],"...",9).'..</div>
			<div class="card-text text-success my-0"><i class="mr-1 fas fa-rupee-sign"></i> '. number_format($record['price']) .'</div>
			<p class="card-text my-0 text-muted" style="font-size: ">'. $record['category'] .'</p>
			</div>
			</div>
			</div>';
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

?>