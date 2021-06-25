<?php

require("Model.php");
require("User.php");

Class Controller{

    public function read(){

        return readfile('views/home.html');

    } 
}

?>