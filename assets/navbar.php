<?php

// $user = 'user';
// session_start();

?>

<!-- Sidebar  -->
<nav id="sidebar">
    <div id="dismiss">
        <i class="fas fa-arrow-left"></i>
    </div>

    <div class="sidebar-header">
        <?php

        if(isset($_COOKIE[$user])) {

            echo '<h3>' . $_COOKIE[$user] . '</h3>';

            if(isset($_COOKIE[$userG])) {

                echo "<script>alert('Welcome ".$_COOKIE[$userG]." !');</script>";
            }
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
                    <a href="http://localhost/Ecommerce%20website%20--%20doSoDeal/category/mobiles">Mobiles</a>
                </li>
                <li>
                    <a href="http://localhost/Ecommerce%20website%20--%20doSoDeal/category/clothes">Clothes</a>
                </li>
                <li>
                    <a href="http://localhost/Ecommerce%20website%20--%20doSoDeal/category/accessories">Accessories</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="http://localhost/Ecommerce%20website%20--%20doSoDeal/orders">Orders</a>
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
            <a href="mailto:sanjaysahubandla@gmail.com">Contact</a>
        </li>
    </ul>

    <ul class="list-unstyled CTAs">
        <li>
            <a href="" class="download">Download App</a>
        </li>
        <li>
            <div class="article">

                <?php

                 if (isset($_COOKIE[$user])) {

                    echo "<div id='logOut' onclick='logOut()'>Log out</div>";
                }

                else

                    echo "Author - SSB";

                ?></div>
        </li>
    </ul>
</nav>

<!-- Page Content  -->
<div id="content" class="m-0">

    <nav class="navbar navbar-expand-lg navbar-light shadow" style="background: #17a2b8">
        <div class="container-fluid row">

            <div class="col-md-3 order-md-1 order-1 col p-0 d-flex">
                <button type="button" id="sidebarCollapse" class="mr-1 btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <!-- <span>Toggle Sidebar</span> -->
                </button>

                <a class="navbar-brand text-white" href="http://localhost/Ecommerce%20website%20--%20doSoDeal/">doSoDeal</a>
            </div>

            <div class="col-md-6 order-md-2 order-4" id="navForm">

                <form class="w-100 pl-4" id="form">
                    <div class="form-row align-items-center jusify-content-center">
                        <div class="my-1 input-group input-group search-box">
                            <input value="" id="searchInput" onkeyup="" type="search" class="display-3 form-control" placeholder="Search what you want..." style="font-family: font-family: 'Poppins', sans-serif;">
                            <div id="result" class="bg-light"></div>
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

                <a href="http://localhost/Ecommerce%20website%20--%20doSoDeal/orders" class="btn btn-light mr-0 pr-0" id="" style="background: transparent;outline: none;border: none;"><i style="font-size: 20px;" class="text-white fas fa-shopping-basket"></i></a>

                <?php

            }

            else {

                ?>
                <button class="btn btn-sm btn-light" data-toggle="modal" data-target="#LoginModal" style="color: #17a2b8; padding-right: 0 !important;"><i class=" fas fa-user" style="color: #17a2b8;"></i></button>
                <button id="logInBtn" class="btn btn-sm btn-light" data-toggle="modal" data-target="#LoginModal" style="border-top-right-radius: 4px;border-bottom-right-radius: 4px;">Login</button>
                <button class="btn btn-light" id="orders" style="background: transparent;outline: none;border: none;"><i style="font-size: 20px;" class="text-white fas fa-shopping-basket"></i></button>

            <?php } ?>
        </div>

        <div class="col-md-1 order-md-4 order-3 col pr-0 mx-0" id="cart">
            <a href="/Ecommerce%20website%20--%20doSoDeal/cart" class="btn btn-light text-white mx-0 my-2 my-sm-0 p-0" style="background: transparent;outline: none;border: none;"><i style="font-size: 20px;" class="fas fa-shopping-cart p-0 m-0"></i></a><sup class="badge badge-danger" id="countingCart" style="position: relative;top: -15px;left: -10px;">
                
                <?php

                if(isset($_COOKIE['currentCartValue'])) {

                    echo $_COOKIE['currentCartValue'];
                }

                else {

                    echo "0";
                }

                ?>
            </sup>
        </div>

    </div>
</nav>