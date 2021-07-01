<?php

//require("Route.php");
require("private/controllers/UserController.php");

Route::addPath("/home", function () {
    UserController::home();
});
Route::addPath("/about_us", function () {
    UserController::about();
});

?>
