<?php

namespace Pwerder\PdoPractice\classes;

class Routes
{
    public static function load($routes, $uri) 
    {
        if (!array_key_exists($uri, $routes)) {
            throw new \Exception("Not Found");
        }
        return "../app/{$routes[$uri]}.php";
    }
}
