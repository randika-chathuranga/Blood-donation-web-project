<?php

class Route
{

    private static array $routes = array();

    public static function addPath($path, $func)
    {
        array_push(self::$routes, Array(
            "path" => $path,
            "function" => $func));

    }

    public static function run()
    {
        $flag = false;
        foreach (self::$routes as $route) {
            if (strtolower($route['path']) == strtolower($_SERVER["REQUEST_URI"])) {
                $route['function'] ();
                $flag = true;
                break;
            }
        }
        if(!$flag)
            echo "Page not found!";
    }
}

?>
