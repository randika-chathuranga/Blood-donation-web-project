<?php 
session_start();
include("templates/header.php");
$user = unserialize($_COOKIE["user"]);
?>


<div class="container register mt-5">
    <div class="row justify-content-md-center">
        <div class="col-md-10 register-right">
            <h3 class="register-heading">Edit Your Profile Data</h3>
            <form action="edit/user" method="POST">
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
                                ? "value = " .$_SESSION["data"]["firstName"] : "value =". $user->firstName) : "value =". $user->firstName ?>
                            name="firstName" id="firstName"/>
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" <?php echo isset($_SESSION["data"]["lastName"]) ? ($_SESSION["data"]["lastName"] !=null
                                ? "value = " .$_SESSION["data"]["lastName"] : "value =". $user->lastName) : "value =". $user->lastName ?> name="lastName"
                            id="lastName"/>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control" <?php echo isset($_SESSION["data"]["phoneNumber"]) ? ($_SESSION["data"]["phoneNumber"] !=null
                                ? "value = " .$_SESSION["data"]["phoneNumber"] : "value =". $user->phoneNumber) : "value =". $user->phoneNumber ?>
                            name="phoneNumber" id="phoneNumber" />
                        </div>
                        <div class="form-group">
                            <label for="">Gender <span style="color:red;">*</span></label>
                            <div class="maxl">
                                <label class="radio inline">
                                    <input type="radio" name="gender" value="male" name="gender" id="gender" <?php if (strcasecmp($user->gender, "male") == 0) echo "checked"?>>
                                    <span> Male </span>
                                </label>
                                <label class="radio inline">
                                    <input type="radio" name="gender" value="female" name="gender" id="gender" <?php if (strcasecmp($user->gender, "female") == 0) echo "checked"?>>
                                    <span>Female </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" <?php echo isset($_SESSION["data"]["address"]) ? ($_SESSION["data"]["address"] !=null
                                ? "value = " .$_SESSION["data"]["address"] : "value =\"". $user->address."\"") : "value =\"". $user->address."\"" ?>
                            name="address" id="address" />
                        </div>
                        <div class="form-group">
                            <label for="">Date of Birth</label>
                            <input type="date" class="form-control" value= <?php echo $user -> dateOfBirth ?> name="dateOfBirth" id="dateOfBirth" />
                        </div>
                        <div class="form-group">
                            <label for="">Body Weight</label>
                            <input type="text" class="form-control" <?php echo isset($_SESSION["data"]["bodyWeight"]) ? ($_SESSION["data"]["bodyWeight"] !=null
                                ? "value = " .$_SESSION["data"]["bodyWeight"] : "value =". $user->bodyWeight) : "value =". $user->bodyWeight ?>
                            name="bodyWeight" id="bodyWeight" />
                        </div>
                        <label for="">Blood Group</label>
                        <select class="form-control" name="bloodGroup" id="bloodGroup">
                            <option value="O+" <?php if($user->bloodGroup == 'O+') echo "selected"?>>0+</option>
                            <option value="0-" <?php if($user->bloodGroup == 'O-') echo "selected"?>>0-</option>
                            <option value="A+" <?php if($user->bloodGroup == 'A+') echo "selected"?>>A+</option>
                            <option value="A-" <?php if($user->bloodGroup == 'A-') echo "selected"?>>A-</option>
                            <option value="B+" <?php if($user->bloodGroup == 'B+') echo "selected"?>>B+</option>
                            <option value="B-" <?php if($user->bloodGroup == 'B-') echo "selected"?>>B+</option>
                            <option value="AB+" <?php if($user->bloodGroup == 'AB+') echo "selected"?>>AB+</option>
                            <option value="AB-" <?php if($user->bloodGroup == 'AB-') echo "selected"?>>AB-</option>
                        </select>

                    </div>

                        

                </div>
                <div class="row justify-content-center">
            <button type="submit" class="btn btn-primary col-md-6 mt-5"> Save</button>
                                        </div>
            </form>
            
        </div>
    </div>

</div>

<?php include("templates/footer.php") ?>