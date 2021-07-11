<?php

require("private/models/User.php");

class UserController
{
    public static function home(){

        
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include "$root/private/views/home.html";

        //add user
        //$user = new User(array('fullName'=>'shan','nic'=>'954871254v','gender'=>"male",'dateOfBirth'=>date('1995-09-02'),'bloodGroup'=>"O+",'bodyWeight'=>17,'adress'=>"some where in piliyandala",'email'=>'test@gmail.com','password'=>'somehashcode'));
        //$user->save();

        //delete user
        //$user = new User(array('fullName'=>'shan','nic'=>'954871254v','gender'=>"male",'dateOfBirth'=>date('1995-09-02'),'bloodGroup'=>"O+",'bodyWeight'=>17,'adress'=>"some where in piliyandala",'email'=>'test@gmail.com','password'=>'somehashcode'));
        //$user->delete();

        //get user
        //$results = User::fetch("nic",'954871254v');

        //foreach($results as $result ){
        //    echo($result->fullName);
        //}

        // update user
        //$results = User::fetch("nic",'954871254v');

        //$results[0]->fullName = "Thiwanka";

        //$results[0]->update();
        
    }

    public static function about(){
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        include "$root/private/views/about_us.html";
    }
}