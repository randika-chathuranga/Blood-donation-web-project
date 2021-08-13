<?php


class Authentication
{
    public static function login(){

        session_start();
        $user = User::fetch("email",$_REQUEST["email"]);
        $_SESSION["email"] = $_REQUEST["email"]; // to place value in input block if login fail

        if($user == null){

            $_SESSION["login_error"] = "user not found";
            header("Location: /login");
            exit;
        }
        else{
            if( password_verify($_REQUEST["password"],$user[0]->password)){
                
                setcookie("user", serialize($user[0]), time() + (3600 * 24), "/");
                header("Location: /home");
                exit;
            }
            else{
                $_SESSION["login_error"] = "Wrong password";
                header("Location: /login");
                exit;
            }       
        }
    }

    public static function logout(){
        session_start();
        unset($_SESSION["email"]);
        setcookie("user", null ,1);

        header("Location: /home");
        exit;
    }
}