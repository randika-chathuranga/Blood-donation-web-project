<?php

require("UnitTests.php");

class UserController
{
    public static function create(){
        session_start();
        $data = array();

        foreach ($_POST as $key => $value) {
            $data[$key] = $value;
        }

        $user = new User($data);
        $_SESSION["data"] = $data;

        if(User::fetch('email',$data['email']) != null){

            $_SESSION["register_error"] = "you already have an account with this email";
            header("Location: http://localhost/register");
            exit;

        }elseif(User::fetch('nic',$data['nic']) != null){

            $_SESSION["register_error"] = "you already have an account with this NIC";
            header("Location: http://localhost/register");
            exit;
        }else{
            unset($_SESSION["data"]);
            $user->save();
            Authentication::login();
        }
        
    }

    public static function home(){
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include "$root/private/views/home.html";
        //$obj = new UnitTests();
        //$obj->run();
    }

    public static function about(){
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include "$root/private/views/about_us.html";
    }
}