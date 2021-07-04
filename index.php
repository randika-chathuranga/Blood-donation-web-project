<?php

require("private/Server.php");
include("private/Path.php");

Server::execute();


/*
// Model,Connection Test
require("private/models/User.php");
$user = new User("shan","Thiwanka","s@gmail.com");
$user->save();
*/

?>
