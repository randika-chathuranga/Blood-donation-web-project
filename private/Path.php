<?php

require("private/controllers/UserController.php");

Route::addPath("/home", function () {
    UserController::home();
});

Route::addPath("/", function () {
    UserController::home();
});

Route::addPath("/about", function () {
    UserController::about();
});

Route::addPath("/contact", function () {
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    include "$root/private/views/contact.php";
});

Route::addPath("/login", function () {
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    include "$root/private/views/login.php";
});

Route::addPath("/register", function () {
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    include "$root/private/views/register.php";
});

Route::addPath("/profile", function () {
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    include "$root/private/views/profile.php";
});

Route::addPath("/donors", function () {
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    include "$root/private/views/donors.php";
});

// post requests

Route::addPath("/login/user", function () {
    Authentication::login();
});

Route::addPath("/logout", function () {
    Authentication::logout();
});

Route::addPath("/register/user", function () {
    UserController::create();
});
