<?php

require("private/models/User.php");

class unitTests
{
    public static function run(){

        //create table  run this code block once to create the table
        //User::createTable();
        // ----------------

        // model tests
        //add user
        //$user = new User(array('fullName'=>'shan','nic'=>'954871254v','gender'=>"male",'dateOfBirth'=>date('1995-09-02'),'bloodGroup'=>"O+",'bodyWeight'=>17,'address'=>"some where in piliyandala",'email'=>'test@gmail.com','password'=>'somehashcode'));
        //$user->save();

        //delete user by instaince
        //$user = new User(array('fullName'=>'shan','nic'=>'954871254v','gender'=>"male",'dateOfBirth'=>date('1995-09-02'),'bloodGroup'=>"O+",'bodyWeight'=>17,'address'=>"some where in piliyandala",'email'=>'test@gmail.com','password'=>'somehashcode'));
        //$user->delete();

        //delete user by column and value 
        //User::deleteByValue('nic','954871254v');

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

}