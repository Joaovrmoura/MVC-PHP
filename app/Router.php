<?php

namespace App;

class Router
{ 
    // armazena os métodos 
    // é um array associativo onde a uri é a chave e o controller é o valor
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    // Define uma rota
    // public function define($routes)
    // {
    //     $this->routes = $routes;
    // }

    public function get($uri, $controller){
        // associa o método de requisição ao valor do array
        $this->routes['GET'][$uri]=$controller;
    }
    public function post($uri, $controller){
        $this->routes['POST'][$uri]=$controller;

    }
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }
    public function show($uri, $method)
    {    
        //retorna o nome diretório raiz
        // por isso coloco em lowercase
        $uri = strtolower($uri);
        // se o array uri existe dentrodo array routes
        if(array_key_exists($uri, $this->routes[$method])){
            // separa o método do controlador e o retorna
            // destribuido com o ...rest
            return $this->callMethod(...
            explode('@', 
            $this->routes[$method][$uri])
            );
            // return $this->routes[$method][$uri];
        }
        echo 'Rota não encontrada!';
    }

    public function callMethod($controller, $action){
        // aqui retorm o método e o controlador
        // controller é a classe dentro de routes e
        // o index é o método da classe
        $link = "App\\Controllers\\{$controller}";

        $cont = new $link;
        return $cont->$action();

    }
}
