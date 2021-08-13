<?php 
session_start();
include("templates/header.php");
?>


<div class="container register mt-5">
    <div class="row justify-content-md-center">
        <div class="col-md-10 register-right">
            <h3 class="register-heading">Register as a Donor</h3>
            <form action="register/user" method="POST">
                <div class="row register-form">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">First Name <span style="color:red;">*</span></label>
                            <?php 
			 	                                if(isset($_SESSION["register_firstNameError"])){
					                                echo "<p class='text-danger mt-1'>".$_SESSION["register_firstNameError"]." </p>";
					                                unset($_SESSION["register_firstNameError"]);
				                                }
                                            ?>
                            <input type="text" class="form-control" <?php echo isset($_SESSION["data"]["firstName"]) ? ($_SESSION["data"]["firstName"] !=null
                                ? "value = " .$_SESSION["data"]["firstName"] : " placeholder = 'jon'") : " placeholder = 'jon'" ?>
                            name="firstName" id="firstName"/>
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" <?php echo isset($_SESSION["data"]["lastName"]) ? ($_SESSION["data"]["lastName"] !=null
                                ? "value = " .$_SESSION["data"]["lastName"] : " placeholder = 'doe'") :  " placeholder = 'doe'" ?> name="lastName"
                            id="lastName"/>
                        </div>
                        <div class="form-group">
                            <label for="">Password <span style="color:red;">*</span></label>
                            <?php 
			 	                                if(isset($_SESSION["register_passwordError"])){
					                                echo "<p class='text-danger mt-1'>".$_SESSION["register_passwordError"]." </p>";
					                                unset($_SESSION["register_passwordError"]);
				                                }
                                            ?>
                            <input type="password" class="form-control" placeholder="Password *" value=""
                                name="password" id="password" />
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password <span style="color:red;">*</span></label>
                            <input type="password" class="form-control" placeholder="Confirm Password *" value="" name="confirmPassword" id="confirmPassword"/>
                        </div>
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control" <?php echo isset($_SESSION["data"]["phoneNumber"]) ? ($_SESSION["data"]["phoneNumber"] !=null
                                ? "value = " .$_SESSION["data"]["phoneNumber"] : " placeholder = '+94 777 77775'") : " placeholder = '+94 777 77775'" ?>
                            name="phoneNumber" id="phoneNumber" />
                        </div>
                        <div class="form-group">
                            <label for="">Gender <span style="color:red;">*</span></label>
                            <div class="maxl">
                                <label class="radio inline">
                                    <input type="radio" name="gender" value="male" name="gender" id="gender" checked>
                                    <span> Male </span>
                                </label>
                                <label class="radio inline">
                                    <input type="radio" name="gender" value="female" name="gender" id="gender">
                                    <span>Female </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email <span style="color:red;">*</span></label>
                            <?php 
			  
                                            if(isset($_SESSION["register_emailError"])){
                                                echo "<p class='text-danger'>".$_SESSION["register_emailError"]." </p>";
                                                unset($_SESSION["register_emailError"]);
                                            }
                                        ?>
                            <input type="email" class="form-control" <?php echo isset($_SESSION["data"]["email"]) ? ($_SESSION["data"]["email"]!=null
                                ? "value = " .$_SESSION["data"]["email"] : " placeholder = 'jondoe@gmail.com'") : " placeholder = 'jondoe@gmail.com'" ?>
                            name="email" id="email" />
                        </div>
                        <div class="form-group">
                            <label for="">NIC Number <span style="color:red;">*</span></label>
                            <?php
                                            if(isset($_SESSION["register_nicError"])){
					                            echo "<p class='text-danger'>".$_SESSION["register_nicError"]." </p>";
					                            unset($_SESSION["register_nicError"]);
				                            }
				
			                            ?>
                            <input type="text" class="form-control" <?php echo isset($_SESSION["data"]["nic"]) ? ($_SESSION["data"]["nic"] !=null
                                ? "value = " .$_SESSION["data"]["nic"] : " placeholder = '978457124V'") : " placeholder = '978457124V'"  ?> name="nic"
                            id="nic" />
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" <?php echo isset($_SESSION["data"]["adress"]) ? ($_SESSION["data"]["address"] !=null
                                ? "value = " .$_SESSION["data"]["address"] : " placeholder = '2/b,colombo,Sri Lanka'") : " placeholder = '2/b,colombo,Sri Lanka'" ?>
                            name="address" id="address" />
                        </div>
                        <div class="form-group">
                            <label for="">Date of Birth</label>
                            <input type="date" class="form-control" value="" name="dateOfBirth" id="dateOfBirth" />
                        </div>
                        <div class="form-group">
                            <label for="">Body Weight</label>
                            <input type="text" class="form-control" <?php echo isset($_SESSION["data"]["bodyWeight"]) ? ($_SESSION["data"]["bodyWeight"] !=null
                                ? "value = " .$_SESSION["data"]["bodyWeight"] : " placeholder = 'weight in Kg'") : " placeholder = 'weight in Kg'" ?>
                            name="bodyWeight" id="bodyWeight" />
                        </div>
                        <label for="">Blood Group</label>
                        <select class="form-control" name="bloodGroup" id="bloodGroup">
                            <option value="O+">0+</option>
                            <option value="0-">0-</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>

                    </div>

                        

                </div>
                <div class="row justify-content-center">
            <button type="submit" class="btn btn-primary col-md-6 mt-5"> Register</button>
                                        </div>
            </form>
            
        </div>
    </div>

</div>

<?php include("templates/footer.php") ?>