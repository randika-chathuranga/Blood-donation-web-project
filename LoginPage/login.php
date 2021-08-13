<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login</title>
</head>

<body>

	<!--nav bar-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 90px;">
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
                </ul>
            </div>
        </div>
    </nav>

	<!--body content-->

	<h4>Donor Login</h4>

	<div class="container" id="login-form">
		<form>
		    <div class="mb-3 row">
    			<label for="staticEmail" class="col-sm-2 col-form-label"><b>Email</b></label>
    			<div class="col-sm-10">
      			<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@gmail.com">
    			</div>
  			</div>
  			<div class="mb-3 row">
    			<label for="inputPassword" class="col-sm-2 col-form-label"><b>Password</b></label>
    			<div class="col-sm-10">
      			<input type="password" class="form-control" id="inputPassword">
    			</div>
  			</div>
		  	<center><button type="submit" class="btn btn-secondary" id="login-button"><i class="fas fa-sign-in-alt"></i>Login Here</button></center>
		</form>
	</div>

	<!--footer-->

	<footer class="bg-light text-center text-lg-start" id="footer">
		<div class="social">
        	<i class="fab fa-facebook-square"></i>
        	<i class="fab fa-linkedin"></i>
        	<i class="fab fa-twitter"></i>
        	<i class="fab fa-youtube"></i>
    	</div>
    	<div class="copyright">
        	<p style="font-size: small;"><i class="far fa-copyright"></i>Copyright Sitename.All rightreserved</p>
    	</div>
	</footer>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c84624a2ba.js" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script> -->

</body>

</html>