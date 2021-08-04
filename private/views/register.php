<?php 
session_start();
include("templates/header.php");
?>


<div class="container register mt-5">
                <div class="row">
                    <div class="col-md-10 register-right">
                                <h3 class="register-heading">Register as a Donor</h3>
                                <form action="register/user" method="POST">
                                <div class="row register-form">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" <?php echo isset($_SESSION["data"]) ? "value = ".$_SESSION["data"]["firstName"] : " placeholder = 'jon'" ?> name="firstName" id="firstName"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" <?php echo isset($_SESSION["data"]) ? "value = ".$_SESSION["data"]["lastName"] : " placeholder = 'doe'" ?> name="lastName" id="lastName"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="password" id="password" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" <?php echo isset($_SESSION["data"]) ? "value = ".$_SESSION["data"]["phoneNumber"] : " placeholder = '+94 777 77775'" ?> name="phoneNumber" id="phoneNumber" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male"  name="gender" id="gender"checked>
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
                                            <input type="email" class="form-control" <?php echo isset($_SESSION["data"]) ? "value = ".$_SESSION["data"]["email"] : " placeholder = 'jondoe@gmail.com'" ?> name="email" id="email" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" <?php echo isset($_SESSION["data"]) ? "value = ".$_SESSION["data"]["nic"] : " placeholder = '978457124V'" ?> name="nic" id="nic" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" <?php echo isset($_SESSION["data"]) ? "value = ".$_SESSION["data"]["address"] : " placeholder = '2/b,colombo,Sri Lanka'" ?> name="address" id="address" />
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control" value="" name="dateOfBirth" id="dateOfBirth" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" <?php echo isset($_SESSION["data"]) ? "value = ".$_SESSION["data"]["bodyWeight"] : " placeholder = 'weight in Kg'" ?> name="bodyWeight" id="bodyWeight" />
                                        </div>
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
                                        <button type="submit" class="btn btn-primary"> Register </button>
                                    </div>
                                    
                                </div>
                                </form>
                                <?php 
			  
			 	                    if(isset($_SESSION["register_error"])){
					                    echo "<h5 class='text-center text-danger mt-5'> ".$_SESSION["register_error"]." </h5>";
					                    unset($_SESSION["register_error"]);
				                    }
				
			                    ?>
                    </div>
                </div>

            </div>

<?php include("templates/footer.php") ?>