<?php


class Authentication
{
    public static function login(){

        session_start();
        $user = User::fetch("email",$_REQUEST["email"]);
        $_SESSION["email"] = $_REQUEST["email"]; // to place value in input block if login fail

        if($user == null){

            $_SESSION["login_error"] = "user not found";
            header("Location: http://localhost/login");
            exit;
        }
        else{
            if($user[0]->password == $_REQUEST["password"]){
                
                setcookie("user", serialize($user[0]), time() + (3600 * 24), "/");
                header("Location: http://localhost/home");
                exit;
            }
            else{
                $_SESSION["login_error"] = "Wrong password";
                header("Location: http://localhost/login");
                exit;
            }       
        }
    }

    public static function logout(){
        session_start();
        unset($_SESSION["email"]);
        setcookie("user", null ,1);

        header("Location: http://localhost/home");
        exit;
    }
}