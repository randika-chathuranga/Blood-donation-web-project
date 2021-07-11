<?php

require("private/Server.php");
include("private/Path.php");

Server::execute();



// Model,Connection Test
require("private/models/User.php");
$user = new User(array('fullName'=>"shan",'nic'=>"954871254v",'gender'=>"male",'dateOfBirth'=>date('1995-09-02'),'bloodGroup'=>"O+",'bodyWeight'=>"17kg",'adress'=>"some where in piliyandala",'email'=>'test@gmail.com','password'=>'somehashcode'));
$user->save();
//$user->delete();
//User::fetch("nic",132);

?>
