<?php

require("private/controllers/UserController.php");

Route::addPath("/home", function () {
    UserController::home();
});

Route::addPath("/", function () {
    UserController::home();
});

Route::addPath("/about_us", function () {
    UserController::about();
});

Route::addPath("/contact", function () {
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    include "$root/private/views/contact.php";
});

