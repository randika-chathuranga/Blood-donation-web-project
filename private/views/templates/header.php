<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Life Savers | Blood Donation</title>
    <link rel="shortcut icon" href="public/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link rel="shortcut icon" href="public/images/fav.jpg">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/all.min.css">
    <link rel="stylesheet" href="public/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css" />
</head>

<body>
    <!-- ******************** Header Starts Here ******************* -->
    <header>
        <div class="container-fluid header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 logo-dv">
                        <img src="public/images/logo.jpg" alt="">
                    </div>
                    <div class="col-md-9 bonto">
                        <ul>
                        <?php
                            if(!isset($_COOKIE["user"]) || $_COOKIE["user"] == null ){
                                echo "<li><a href='/login'><div class='donta-btn'> <p>Already a donor</p> <strong>Login</strong> </div></a></li>";
                                echo "<li><a href='/register'><div class='voltterr-btn'> <p>Want to Become a Donor</p> <strong>Register Here</strong> </div></a></li>";
                       
                            }else{
                        
                                echo "<li><a href='/profile'><div class='voltterr-btn'> <p>Welcome</p> <strong>". unserialize($_COOKIE["user"])->fullName ."</strong> </div></a></li>";
                                echo "<li><a href='/logout'><div class='donta-btn pt-2 pb-3'><strong>Logout</strong> </div></a></li>";
                            }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

     <!-- ******************** Nav Starts Here ******************* -->

        <div id="menu-jk" class="headwe-nav container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 nav-div">
                       <nav class="navbar navbar-expand-lg navbar-light     ">
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                         

                          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                              <li class="nav-item active">
                                <a class="nav-link" href="/home">Home </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#about_us">About Us</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="#process"  >Donation Process</a>
                              </li>
                               <li class="nav-item">
                                <a class="nav-link " href="#events"  >Events</a>
                              </li>
                               <li class="nav-item">
                                <a class="nav-link " href="donors.php" >Donors</a>
                              </li>
                               <li class="nav-item">
                                <a class="nav-link " href="contact_us.html" >Contact US</a>
                              </li>
                            </ul>
                          
                          </div>
                        </nav>
                                            </div>
                    <div class="col-lg-3 d-none d-lg-block social-div">
                        <ul class="ulright">
                            <li>
                                <i class="fab fa-facebook-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-twitter-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-instagram"></i>
                            </li>
                            <li>
                                <i class="fab fa-linkedin"></i>
                            </li>
                            <li>
                                <i class="fab fa-pinterest-square"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

 
                        