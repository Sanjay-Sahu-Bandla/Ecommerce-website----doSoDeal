<?php

// session_start();

$user = 'user';
$userG = 'Greetings';


// $userName = 'sanjay';

// setcookie($user, $userName, time() + (86400), '/');

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
    <link rel="stylesheet" href="style.css">
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

    <!-- custom js control -->
    <script type="text/javascript" src="control.js"></script>

</head>

<body>

    <?php


    if(!isset($_COOKIE['user_id'])) {

        echo '<script>

        $(document).ready(function(){

            $("#logInBtn").click();

        });

        </script>';

    }

    else {

        $user_id = $_COOKIE['user_id'];

    }

    ?>

    <?php

    include_once("assets/Login.php");

    include_once("Database/db.php");

    include_once("Database/operations.php");

    ?>


    <div class="container-fluid">

        <!-- Navigation Bar -->
        <?php include_once('assets/navbar.php');  ?>

        <?php

        getOrderDetails($con,$user_id);

        ?>

        <!-- <div class="card p-3 m-2 mb-3" style="max-width: 100%; ">
          <div class="row no-gutters">
            <div class="col-md-2">
              <img src="images/realme.jpg" class = "card-img img-responsive w-100   " alt="...">
            </div>
            <div class="col-md-10">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div> -->

</div>

</div> <!-- container-fluid -->

<div class="overlay"></div>
<!-- custom js control -->
<script type="text/javascript" src="control.js"></script>

<script type="text/javascript">
        // $("#logInBtn").click()
    </script>

</body>

</html>