<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/c84624a2ba.js" crossorigin="anonymous"></script>
    <title>blood donation web</title>
    <style>
        /*styles for nav bar & nav links*/
        #navbarNav li a {
            color: black;
        }

        #navbarNav li a:hover {
            color: red;
        }

        #navbarNav li span a:hover {
            color: white;
        }

        .nav-link {
            font-size: 20px;
        }

        img {
            width: 250px;
            height: 80px;
        }

        .navbar-nav {
            margin-left: 40px;
            padding-top: 5px;

        }

        .nav-item {
            padding: 0 20px;
        }

        /* styles for additional login and register btns*/
        .nav-item-span {
            margin-left: 500px;
            text-align: center;
            margin-top: -10px;
        }

        .nav-item-span a {
            text-decoration: none;
            padding: 10px;
            background: lightsteelblue;
            border-radius: 10px;
        }

        /*styles for footer*/
        .social {
            text-align: center;
        }

        .social i {
            padding: 0 10px;
            font-size: 30px;

        }

        .copyright {
            text-align: center;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="height: 90px;">
        <div class="container-fluid">
            <img src="./blood1.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <span><a href="#">Login</a></span>
                        <span><a href="#">Password</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>