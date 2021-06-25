<?php

class Route{

    public $paths;

    public static function addPath($path,$func){

        array_push($paths,($path,$func));
    }

    public static function run(){
         
        foreach ($path in $this->paths){
            if ($path[0] == 'home'){
                $path[1]();
            }
        }
    }
}

?>
