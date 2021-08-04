<?php 
session_start();
include("templates/header.php");
?>

<div class="container" id="login-form">
		<form method="POST" action="login/user">
		    <div class="mb-3 row">
    			<label for="staticEmail" class="col-sm-2 col-form-label"><b>Email</b></label>
    			<div class="col-sm-10">
      			<input type="email" class="form-control" id="email" <?php echo isset($_SESSION["email"]) ? "value = ".$_SESSION["email"] : " placeholder = 'jon@gmail.com'" ?> name="email">
    			</div>
  			</div>
  			<div class="mb-3 row">
    			<label for="inputPassword" class="col-sm-2 col-form-label"><b>Password</b></label>
    			<div class="col-sm-10">
      			<input type="password" class="form-control" id="password" name="password">
    			</div>
  			</div>
		  	<center><button type="submit" class="btn btn-secondary" id="login-button"><i class="fas fa-sign-in-alt"></i>Login Here</button></center>

			  <?php 
			  
			 	if(isset($_SESSION["login_error"])){
					 echo "<h6> ".$_SESSION["login_error"]." </h6>";
					 unset($_SESSION["login_error"]);
				 }
				
			  ?>
		</form>
	</div>

    <?php include("templates/footer.php") ?>