<?php 
session_start();
include("templates/header.php");
?>

	<div class="container mt-5">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h2 class="wv-heading--title">
               Check out — it’s free!
            </h2>
            <h4 class="wv-heading--subtitle">
               Lorem ipsum dolor sit amet! Neque porro quisquam est qui do dolor amet, adipisci velit...
            </h4>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form method="POST" action="login/user" name="login">
                  <div class="form-group">
                     <input type="email" name="email"  class="form-control my-input" id="email" <?php echo isset($_SESSION["email"]) ? "value = ".$_SESSION["email"] : " placeholder = 'jon@gmail.com'" ?>>
                  </div>
                  <div class="form-group">
                     <input type="password" name="password" id="password"  class="form-control my-input" placeholder="password">

                  </div>
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm">Login</button>
                  </div>
                  <div class="col-md-12 ">
                     <div class="login-or text-center">
                        <hr class="hr-or">
                        <span class="span-or">or</span>
                     </div>
                  </div>
                  <div class="form-group">
                     <a class="btn btn-block g-button" href="#">
                     <i class="fa fa-google"></i> Register
                     </a>
                  </div>
               </form>
			   <?php 
			  
			 	if(isset($_SESSION["login_error"])){
					 echo "<h5 class='text-center text-danger'> ".$_SESSION["login_error"]." </h5>";
					 unset($_SESSION["login_error"]);
				 }
				
			  ?>
            </div>
         </div>
      </div>
   </div>

    <?php include("templates/footer.php") ?>