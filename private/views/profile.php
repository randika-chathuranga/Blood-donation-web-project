<?php
session_start();
$styles = array("profile.css", "//cdn.jsdelivr.net/npm/@sweetalert2/theme-borderless/borderless.css");
include("templates/header.php");
?>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-12 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <?php
                                $user = unserialize($_COOKIE["user"]);
                                if (strcasecmp($user->gender, "male") == 0) {
                                    echo '<div class="m-b-25"> <img src="public/images/profile/user_male.png" class="img-radius" alt="User-Profile-Image"> </div>';
                                } else {
                                    echo '<div class="m-b-25"> <img src="public/images/profile/user_female.png" class="img-radius" alt="User-Profile-Image"> </div>';
                                }
                                ?>
                                <h6 class="f-w-600">
                                    <?php
                                    echo $user->firstName;
                                    ?></h6>
                                <h6 class="f-w-600">
                                    <?php
                                    echo $user->lastName;
                                    ?></h6>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">NIC Number</p>
                                        <h6 class="text-muted f-w-400"><?php echo $user->nic->value; ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Date of Birth</p>
                                        <h6 class="text-muted f-w-400"><?php echo $user->dateOfBirth ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Body Weight</p>
                                        <h6 class="text-muted f-w-400"><?php echo $user->bodyWeight ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Blood Group</p>
                                        <h6 class="text-muted f-w-400"><?php echo $user->bloodGroup ?></h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Contact Details</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400">
                                            <?php echo $user->email; ?>
                                        </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400"><?php echo $user->phoneNumber ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Address</p>
                                        <h6 class="text-muted f-w-400"><?php echo $user->address ?></h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center edit">
            <button type="button" class="btn btn-info" onclick="window.location.href='/edit';">Edit</button>
            <button type="button" class="btn btn-danger" id="del">Delete Account</button>
        </div>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="public/js/profile.js"></script>
<?php include("templates/footer.php") ?>