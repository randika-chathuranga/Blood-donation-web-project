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

        $_SESSION["data"] = $data;
        $error = false;

        if($data["password"] == null){

            $_SESSION["register_passwordError"] = "Password cannot be empty";
            header("Location: /register");
            $error = true;
        }if($data["password"] != $data["confirmPassword"]){

            $_SESSION["register_passwordError"] = "Confirm Password didnt match";
            header("Location: /register");
            $error = true;
        }if($data["firstName"] == null){

            $_SESSION["register_firstNameError"] = "First Name cannot be empty";
            header("Location: /register");
            $error = true;
        }if(User::fetch('email',$data['email']) != null){

            $_SESSION["register_emailError"] = "you already have an account with this email";
            header("Location: /register");
            $error = true;
        }if($data['email'] == null){

            $_SESSION["register_emailError"] = "Email cannot be empty";
            header("Location: /register");
            $error = true;
        }if($data['nic'] == null){

            $_SESSION["register_nicError"] = "NIC cannot be empty";
            header("Location: /register");
            $error = true;
        }if(User::fetch('nic',$data['nic']) != null){

            $_SESSION["register_nicError"] = "you already have an account with this NIC";
            header("Location: /register");
            $error = true;
        }
    
        if(!$error){

            unset($_SESSION["data"]);

            $data["password"] = password_hash($data["password"], PASSWORD_DEFAULT);
            $user = new User($data);
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
    
    public static function clearDonorsForJson($userList){
        foreach ($userList as $user) {
             $user->nic = null;
             $user->password = null;
             $user->lastName = null;
        }
        return $userList;
    }

    public static function getDonors(){
        echo json_encode(self::clearDonorsForJson(User::getDonorList()));
    }

    
}