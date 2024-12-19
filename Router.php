<?php

class Router
{
    protected $routes = [];

    // Define uma rota
    public function define($routes)
    {
        $this->routes = $routes;
    }
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }
   
    public function show($uri)
    {
        // se o array uri existe dentrodo array routes
        if(array_key_exists($uri, $this->routes)){
            return $this->routes[$uri];
        }
    }
}
