<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Life Savers | Blood Donation</title>
    <link rel="shortcut icon" href="public/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,700,900" rel="stylesheet">
    <link rel="shortcut icon" href="public/images/fav.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" integrity="sha512-c93ifPoTvMdEJH/rKIcBx//AL1znq9+4/RmMGafI/vnTFe/dKwnn1uoeszE2zJBQTS1Ck5CqSBE+34ng2PthJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css" />
    <?php
    if (!isset($styles)) {
        $styles = array();
    }
    foreach ($styles as $style) {
        echo "<link href=\"public/css/" . $style . "\" rel=\"stylesheet\" type=\"text/css\">\n";
    }
    ?>
    <?php
    if (!isset($scripts)) {
        $scripts = array();
    }
    foreach ($scripts as $script) {
        echo "<script src=\"public/js/" . $script . "\" ></script> \n";
    }
    ?>
</head>

<body>
    <!-- ******************** Header Starts Here ******************* -->
    <header >
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
                        
                                echo "<li><a href='/profile'><div class='voltterr-btn'> <p>Welcome</p> <strong>". unserialize($_COOKIE["user"])->firstName ."</strong> </div></a></li>";
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
                                <a class="nav-link " href="donors" >Donors</a>
                              </li>
                               <li class="nav-item">
                                <a class="nav-link " href="#contact" >Contact US</a>
                              </li>
                            </ul>
                          
                          </div>
                        </nav>
                                            </div>
                    <div class="col-lg-3 d-none d-lg-block social-div">
                        
                    </div>
                </div>
            </div>
        </div>
    </header>

 
                        