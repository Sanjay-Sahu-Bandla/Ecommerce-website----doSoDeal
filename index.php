<?php

session_start();

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
                    <form action="Database/operations.php"method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="login-email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="login-password" class="form-control" id="exampleInputPassword1">
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

                    <form id="signUpFom" action="Database/operations.php" method="post" onsubmit="return validate()">

                        <input type="hidden" name="id" value="<?php echo uniqid(); ?>">

                        <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4" class="">First name</label>
                          <small class='d-inline form-text text-danger'>*</small>
                          <input type="text" class="form-control" name="firstName" required id="inputEmail4">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="lastName">Last name</label>
                          <small class='d-inline form-text text-danger'>*</small>
                          <input type="text" name="lastName" required class="form-control" id="lastName">
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <small class='d-inline form-text text-danger'>*</small>
                    <input type="email" class="form-control" name="mail" required id="inputEmail4">
                </div>
                      <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="inputPassword1">Password</label>
                          <small class='d-inline form-text text-danger'>*</small>
                          <input type="password" name="password" required class="form-control" id="inputPassword1" minlength="4">
                      </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword2">Confirm Password</label>
                          <small class='d-inline form-text text-danger'>*</small>
                        <input type="password" name="repeat-password" required class="form-control" id="inputPassword2" minlength="4">
                      </div>
                  </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">City</label>
                      <input type="text" class="form-control" id="inputCity" name="city">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="inputState">State</label>
                      <select id="inputState" class="form-control" name="state">
                        <option selected>Choose...</option>
                        <option >Telangana</option>
                        <option >Maharashtra</option>
                        <option >Delhi</option>
                        <option>Karnataka</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Pincode</label>
                  <input type="text" class="form-control" id="inputZip" name="pincode">
              </div>
          </div>
          <div class="text-right">              
              <button onclick="signUp()" type="submit" class="text-right btn btn-primary" style="background: #17a2b8; border:none;">Sign Up</button>
          </div>
      </form>
  </div>
</div>
</div>
</div>


<?php include_once("Database/db.php"); ?>

<div class="container-fluid">

    <!-- Navigation Bar -->
    <?php include_once('assets/navbar.php') ?>

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

                <?php include_once('assets/footer.php') ?>
                
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

            function validate() {

                var pswd1 = $('#inputPassword1').val();
                var pswd2 = $('#inputPassword2').val();

                if(pswd1 != pswd2) {
                    alert('Password is not matched');
                    return false;
                }
                else {
                    return true;
                }

            }

 </script>
</body>

</html>