<?php

require("UnitTests.php");

class UserController
{
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
        }
        return $userList;
    }

    public static function getDonors(){
        echo json_encode(self::clearDonorsForJson(User::getDonorList()));
    }

    
}