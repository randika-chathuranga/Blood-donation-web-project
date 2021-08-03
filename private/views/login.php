<?php include("templates/header.php") ?>

<div class="container" id="login-form">
		<form method="POST" action="login/user">
		    <div class="mb-3 row">
    			<label for="staticEmail" class="col-sm-2 col-form-label"><b>Email</b></label>
    			<div class="col-sm-10">
      			<input type="email" class="form-control" id="email" placeholder="name@gmail.com" name="email">
    			</div>
  			</div>
  			<div class="mb-3 row">
    			<label for="inputPassword" class="col-sm-2 col-form-label"><b>Password</b></label>
    			<div class="col-sm-10">
      			<input type="password" class="form-control" id="password" name="email">
    			</div>
  			</div>
		  	<center><button type="submit" class="btn btn-secondary" id="login-button"><i class="fas fa-sign-in-alt"></i>Login Here</button></center>
		</form>
	</div>

    <?php include("templates/footer.php") ?>