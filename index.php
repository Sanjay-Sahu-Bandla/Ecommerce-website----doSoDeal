<?php

session_start();

if(isset($_SESSION['emptyCart'])) {

    $emptyCart = $_SESSION['emptyCart'];

    if($emptyCart == 'empty') {

        if (isset($_COOKIE['PidAndCartName'])) {
            foreach ($_COOKIE['PidAndCartName'] as $name => $value) {
                setcookie("PidAndCartName[".$name."]", "", time() - 1, "/");
            }
        }

        if (isset($_COOKIE['currentCartValue'])) {
                setcookie("currentCartValue", "", time() - 1, "/");
        }


        echo '<script>alert(0)</script>';
    }

    else {
      echo '<script>alert(1)</script>';

  }

  session_destroy();
  header('location:/Ecommerce%20website%20--%20doSoDeal/index.php');
}

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
    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- custom js control -->
    <script type="text/javascript" src="control.js"></script>


</head>

<body>

    <?php include_once("assets/Login.php"); ?>

    <?php include_once("Database/db.php"); ?>

    <div class="container-fluid">

        <!-- Navigation Bar -->
        <?php include('assets/navbar.php') ?>

        <!-- Product Container -->

        <!-- Carousel -->
        <?php
     //    if (isset($_COOKIE['PidAndCartName'])) {
     //        foreach ($_COOKIE['PidAndCartName'] as $name => $value) {
     //         $name = htmlspecialchars($name);
     //         $value = htmlspecialchars($value);
     //         echo "$name : $value <br />\n";
     //     }
     // }

     // if (isset($_COOKIE['currentCartValue'])) {
     //         echo $_COOKIE['currentCartValue'];
     //    }

     ?>
     <div class="carouselBanner">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox" style="max-height: 420px !important; width: 100%;">
                <div class="carousel-item active" data-interval="4000">
                    <img src="images/offerClothes1.jpg" class="rounded shadow d-block w-100" alt="..." style="max-height: 420px !important;">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Second slide label</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div> -->
                  </div>
                  <div class="carousel-item" data-interval="4000">
                    <img src="images/offerMobile.jpg" class="rounded shadow d-block h-50 w-100" alt="..." style="max-height: 420px !important;">
                            <!-- <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                          </div> -->
                      </div>
                      <div class="carousel-item" data-interval="4000">
                        <img src="images/offerElectronic.jpg" class="rounded shadow d-block w-100" alt="..." style="max-height: 420px !important;">
                            <!-- <div class="carousel-caption d-none d-md-block">
                              <h5>Third slide label</h5>
                              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                          </div> -->
                      </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!-- Products row-1-->

        <div class="card m-2 p-1 overflow-auto productRow-Mobiles" id="cardScrollHide">
            <div class="card-body">Deals of the day <i class="fas fa-clock text-primary ml-2"></i></div><hr class="mt-0">
            <div class="row overflow-auto flex-row flex-nowrap" id="cardScrollShow">
                <?php 

                include 'Database/operations.php';

                getMobilesData($con);
                

                if(!isset($_COOKIE['user'])) {

                    header('location:/Ecommerce%20website%20--%20doSoDeal/index.php');
                }


                ?>
            </div>
        </div>

        <!-- Products Banner-->

        <div class="card m-2 p-1 overflow-auto" id="cardScrollHide">
            <div class="card-body">Special offers for you</div><hr class="mt-0">
            <div class="row overflow-auto flex-row flex-nowrap" id="cardScrollShow">
                <div class="col-md-4 col-sm-6 col-10 d-flex align-items-stretch m-0 pr-0">
                    <div class="card border-0 mb-2">
                        <img src="images/menFasionSale1.jpg" class="card-img-top my-0 w-100" alt="...">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-10 d-flex align-items-stretch m-0 pr-0">
                    <div class="card border-0 mb-2">
                        <img src="images/menFasionSale2.jpg" class="card-img-top my-0 w-100" alt="...">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-10 d-flex align-items-stretch m-0 pr-0">
                    <div class="card border-0 mb-2">
                        <img src="images/menFasionSale3.jpg" class="card-img-top my-0 w-100" alt="...">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-10 d-flex align-items-stretch m-0 pr-0">
                    <div class="card border-0 mb-2">
                        <img src="images/offerClothes1.jpg" class="card-img-top my-0 w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>

        <!-- Products row-2-->

        <div class="card m-2 p-1 overflow-auto" id="cardScrollHide">
            <div class="card-body">Deals of the day <i class="fas fa-clock text-primary ml-2"></i></div><hr class="mt-0">
            <div class="row overflow-auto flex-row flex-nowrap" id="cardScrollShow">
                <?php 

                getClothesData($con);

                ?>
            </div>
        </div>

        <!-- Products row-3-->

        <div class="card m-2 p-1 overflow-auto" id="cardScrollHide">
            <div class="card-body">Accessories<i class="fas fa-clock text-primary ml-2"></i></div><hr class="mt-0">
            <div class="row overflow-auto flex-row flex-nowrap" id="cardScrollShow">
                <?php 

                getAccessoriessData($con);

                ?>
            </div>
        </div>

        <!-- Products Banner-->

        <div class="card m-2 p-1 overflow-auto" id="cardScrollHide">
            <div class="card-body">Special offers for you</div><hr class="mt-0">
            <div class="row overflow-auto flex-row flex-nowrap" id="cardScrollShow">
                <div class="col-md-4 col-sm-6 col-10 d-flex align-items-stretch m-0 pr-0">
                    <div class="card border-0 mb-2">
                        <img src="images/menFasionSale3.jpg" class="card-img-top my-0 w-100" alt="...">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-10 d-flex align-items-stretch m-0 pr-0">
                    <div class="card border-0 mb-2">
                        <img src="images/offerClothes1.jpg" class="card-img-top my-0 w-100" alt="...">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-10 d-flex align-items-stretch m-0 pr-0">
                    <div class="card border-0 mb-2">
                        <img src="images/menFasionSale2.jpg" class="card-img-top my-0 w-100" alt="...">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-10 d-flex align-items-stretch m-0 pr-0">
                    <div class="card border-0 mb-2">
                        <img src="images/menFasionSale1.jpg" class="card-img-top my-0 w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>

                <!-- Footer -->

                <?php include_once('assets/footer.php') ?>
                
                <!-- Footer -->
            </div>
        </div>

        <div class="overlay"></div>

        <!-- custom js control -->
        <script type="text/javascript" src="control.js"></script>
    </body>

    </html>