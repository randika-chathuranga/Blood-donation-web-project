<?php

require("private/controllers/UserController.php");
require("private/controllers/Authentication.php");

Route::addPath("/home", function () {
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    include "$root/private/views/home.php";
});

Route::addPath("/", function () {
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    include "$root/private/views/home.php";
});

Route::addPath("/about", function () {
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    include "$root/private/views/about.php";
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

Route::addPath("/edit", function () {
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    include "$root/private/views/edit.php";
});

Route::addPath("/delete", function () {
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    include "$root/private/views/delete.php";
});

Route::addPath("/donors", function () {
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    include "$root/private/views/donors.php";
});

Route::addPath("/donors.json", function () {
    UserController::getDonors();
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
Route::addPath("/edit/user", function () {
    UserController::update();
});
