<?php

$user = 'user';
$userName = 'sanjay';

setcookie($user, $userName, time() + (86400), '/');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

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

</head>

<body>

    <!-- Login Modal -->
    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Log in !</h5>
                    <button id="loginClose" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary" style="background: #17a2b8; border:none;">Submit</button>
                        <div class="form-group text-right mb-0">
                            <button onclick="createAccount()" type="button" class="bg-white btn btn-light" for="exampleCheck1" style="font-size: 12px; color: #17a2b8 ;">Create new account !</button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="facebook.php" class="btn btn-primary" onclick="FB()" style="background: #17a2b8; border:none;">Continue</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Account Modal -->

    <button id="signUp" class="d-none btn btn-sm btn-light" data-toggle="modal" data-target="#createAccountModel" style="border-top-right-radius: 4px;border-bottom-right-radius: 4px;">createAccountModel</button>

    <div class="modal fade" id="createAccountModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Sign Up !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Email</label>
                          <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Password</label>
                          <input type="password" class="form-control" id="inputPassword4">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                      </div>
                      <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputCity">City</label>
                          <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputState">State</label>
                          <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option >Telangana</option>
                            <option >Maharashtra</option>
                            <option >Delhi</option>
                            <option>Karnataka</option>
                          </select>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputZip">Zip</label>
                          <input type="text" class="form-control" id="inputZip">
                        </div>
                      </div>
                      <button onclick="signUp()" type="submit" class="btn btn-primary" style="background: #17a2b8; border:none;">Sign Up</button>
                    </form>
                </div>

                <div class="modal-footer">
                    <button id="signUpClose" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="facebook.php" class="btn btn-primary" onclick="FB()" style="background: #17a2b8; border:none;">Continue</a>
                </div>
            </div>
        </div>
    </div>


    <?php include_once("Database/db.php"); ?>

    <div class="container-fluid">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <?php

                if(isset($_COOKIE[$user])) {
                    echo '<h3>' . $_COOKIE[$user] . '</h3>';
                }

                else {
                    echo '<h3>doSoDeal </h3>';
                }


                ?>
            </div>

            <ul class="list-unstyled components">
                <p>Home</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Shop by catagory</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Mobiles</a>
                        </li>
                        <li>
                            <a href="#">Clothes</a>
                        </li>
                        <li>
                            <a href="#">Accessories</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Orders</a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="" class="download">Download App</a>
                </li>
                <li>
                    <a href="" class="article">Author - SSB</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="m-0">

            <nav class="navbar navbar-expand-lg navbar-light" style="background: #17a2b8">
                <div class="container-fluid row">

                    <div class="col-md-3 order-md-1 order-1 col p-0 d-flex">
                        <button type="button" id="sidebarCollapse" class="mr-1 btn btn-info">
                            <i class="fas fa-align-left"></i>
                            <!-- <span>Toggle Sidebar</span> -->
                        </button>

                        <a class="navbar-brand text-white" href="#">doSoDeal</a>
                    </div>

                    <div class="col-md-6 order-md-2 order-4" id="navForm">

                        <form class="w-100 pl-4" id="form">
                            <div class="form-row align-items-center jusify-content-center">
                                <div class="my-1 input-group input-group">
                                    <input type="search" class="display-3 form-control" placeholder="Search what you want..." style="font-family: font-family: 'Poppins', sans-serif;">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-light"><i class="fas fa-search" style="color: #17a2b8"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-2 order-md-3 order-2 col btn-group" role="group" id="lgingAndorders">

                      <?php

                      if (isset($_COOKIE[$user])) {


                        ?>

                        <button class="btn btn-light mr-0 pr-0" id="" style="background: transparent;outline: none;border: none;"><i style="font-size: 20px;" class="text-white fas fa-shopping-basket"></i></button>

                        <?php

                    }

                    else {

                        ?>
                        <button class="btn btn-sm btn-light" data-toggle="modal" data-target="#LoginModal" style="color: #17a2b8; padding-right: 0 !important;"><i class=" fas fa-user" style="color: #17a2b8;"></i></button>
                        <button class="btn btn-sm btn-light" data-toggle="modal" data-target="#LoginModal" style="border-top-right-radius: 4px;border-bottom-right-radius: 4px;">Login</button>
                        <button class="btn btn-light" id="orders" style="background: transparent;outline: none;border: none;"><i style="font-size: 20px;" class="text-white fas fa-shopping-basket"></i></button>

                    <?php } ?>
                </div>

                <div class="col-md-1 order-md-4 order-3 col pr-0 mx-0" id="cart">
                    <button class="btn btn-secondary mx-0 my-2 my-sm-0 p-0" style="background: transparent;outline: none;border: none;"><i style="font-size: 20px;" class="fas fa-shopping-cart p-0 m-0"></i></button><sup class="badge badge-danger">1</sup>
                </div>

            </div>
        </nav>

        <!-- Product Container -->

        <!-- Carousel -->

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

        <div class="product-container">

                <!-- <h3>Lorem Ipsum Dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
                </div>

                <!-- Footer -->
                <footer class="page-footer font-small bg-dark">

                  <div style="background: #17a2b8;">
                    <div class="container">

                      <!-- Grid row-->
                      <div class="row py-4 d-flex align-items-center">

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-5 text-center text-white text-md-left mb-4 mb-md-0">
                          <h6 class="mb-0">Get connected with us on social networks!</h6>
                      </div>
                      <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-md-6 col-lg-7 text-center text-md-right">

                          <!-- Facebook -->
                          <a class="btn-lg text-white rounded-circle shadow rgba-white-slight mx-1" href="https://www.facebook.com/profile.php?id=100010035810827" style="background: #3b5998;"><i class="mt-4 fab fa-facebook-f"></i>
                          </a>
                          <!-- Twitter -->
                          <a class="btn-lg text-white rounded-circle shadow rgba-white-slight mx-1" href="https://twitter.com/SanjaySahu14312" style="background: #1DA1F2;">
                            <i class="mt-4 fab fa-twitter"></i>
                        </a>
                        <!-- Google +-->
                        <a class="btn-lg text-white  rounded-circle shadow rgba-white-slight mx-1" href="https://in.pinterest.com/sanjaysahubandla" style="background: #c8232c;">
                            <i class="mt-4 fab fa-pinterest"></i>
                        </a>
                        <!--Linkedin -->
                        <a class="btn-lg text-white  rounded-circle shadow rgba-white-slight mx-1" href="https://www.linkedin.com/in/sanjay-sahu-395b2a147/" style="background: #0e76a8;">
                            <i class="mt-4 fab fa-linkedin" style="width: 8px;"></i>
                        </a>
                        <!--Instagram-->
                        <a class="btn-lg text-white  rounded-circle shadow                rgba-white-slight mx-1" href="https://www.instagram.com/    sanjay_sahu_bandla" style="background: #f09433; background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );"><i class="mt-4 fab fa-instagram"></i>
                        </a>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3 text-white">

              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">doSoDeal Corp.</h6>
                <hr class="bg-success accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>An affiliate marketing where you can get your desired products such as accessories, mobiles, clothes and many more.</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Products</h6>
                <hr class="bg-success accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                  <a href="#!">Mobiles</a>
              </p>
              <p>
                  <a href="#!">Clothes</a>
              </p>
              <p>
                  <a href="#!">Accessories</a>
              </p>
              <p>
                  <a href="#!">Electronics</a>
              </p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Useful links</h6>
            <hr class="bg-success accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
                <a href="https://www.linkedin.com/in/sanjay-sahu-395b2a147/">About Us</a>
            </p>
            <p>
                <a href="mailto:sanjaysahubandla@gmail.com">Contact</a>
            </p>
            <p>
                <a href="mailto:sanjaysahubandla@gmail.com">Newsletter</a>
            </p>
            <p>
                <a href="mailto:sanjaysahubandla@gmail.com">Privacy Policy</a>
            </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Contact</h6>
            <hr class="bg-success accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p><i class="fa fa-home pr-2" style="font-size: 220x;"></i> Nizamabad, Telangana, Inida</p>
            <p><i class="fa fa-envelope pr-2" style="font-size: 220x;"></i> sanjaysahubandla@gmail.com</p>
            <p><i class="fa fa-phone pr-2" style="font-size: 220x;"></i> + 91 99080 86610</p>
            <p><i class="fa fa-print pr-2" style="font-size: 20px;"></i> + 91 95533 11848</p>

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3 text-muted" style="background: #00000033;">© 2020 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/" style="color: #b5b5b5"> dosodeal.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
</div>
</div>

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

    function createAccount() {

        $('#signUp').click();
        $('#loginClose').click();

    }

    function signUp() {

         // $('#signUpClose').click();
    }
</script>
</body>

</html>