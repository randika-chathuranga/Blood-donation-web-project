<?php


class UserController
{
    public static function home(){
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include "$root/private/views/home.html";
    }

    public static function about(){
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include "$root/private/views/about_us.html";
    }
}