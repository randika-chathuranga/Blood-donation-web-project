<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/views/css/main.css" rel="stylesheet" type="text/css">
    <?php
    if (!isset($styles)) {
        $styles = array();
    }
    foreach ($styles as $style) {
        echo "<link href=\"public/views/css/" . $style . "\" rel=\"stylesheet\" type=\"text/css\">\n";
    }
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <?php
    if (!isset($scripts)) {
        $scripts = array();
    }
    foreach ($scripts as $script) {
        echo "<script src=\"public/views/js/" . $script . "\" ></script> \n";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/c84624a2ba.js" crossorigin="anonymous"></script>
    <title>blood donation web</title>
</head>

<body>
<nav class="navbar navbar-expand-lg" style="height: 90px;">
    <div class="container-fluid">
        <img src="./blood1.png" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Donar List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item-span">
                        <span>
                            <p>Are you a donar?</p>
                        </span>
                        <?php
                       
                        if(!isset($_COOKIE["user"]) || $_COOKIE["user"] == null ){
                            echo "<span><a href='/login'>Login</a></span>";
                            echo "<span><a href='/register'>Register</a></span>";
                        }  
                        else{
                            echo "<span> <a href='/profile'>". unserialize($_COOKIE["user"])->fullName ." </a></span>";
                            echo "<span><a href='/logout'>LogOut</a></span>";
                        }
                            
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>