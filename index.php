<?php

require("private/Server.php");
include("private/Path.php");

Server::execute();



// Model,Connection Test
require("private/models/User.php");
$user = new User("shan","Thiwanka","s@gmail.com",132);
//$user->save();
//$user->delete();

?>
