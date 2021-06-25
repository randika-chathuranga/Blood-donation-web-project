<?php

require("Route.php");
require("controller/UserController");

class Path{

    function _construct(){
        
        Route.addPath("http://localhost/home",UserController().read);
    
    }
}

?>
