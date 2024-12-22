<?php

namespace App;
use Exception;
// classe usada em routes
class Router
{ 
    // armazena os métodos 
    // é um array associativo onde a uri é a chave e o controller é o valor
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];
    
     // associa a uri ao método de requisição, através de um array associativo,
     // os valores vêm de routes EX: uri = 'posts', $controller = Postcontroller@posts;
    public function get($uri, $controller){
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

    // verifica se o método de requisição está associado a rota correta
    public function show($uri, $method)
    {    
        // retorna o nome diretório raiz
        // por isso coloco em lowercase
        $uri = strtolower($uri);

        // verifica se a uri(rota) está no método de requisção(GET, POST) correto
        if(array_key_exists($uri, $this->routes[$method])){
            // separa o método do controlador e o retorna
            // destribuido com o ...rest
            return $this->callMethod(...
            explode('@', 
            $this->routes[$method][$uri])
            );
        }
        throw new Exception("Rota não encontrada para o método {$method}: {$uri}");
    }

    public function callMethod($controller, $action){
        // aqui retorna o método e o controlador
        // controller é a classe dentro de routes e
        // o index é o método da classe
        $link = "App\\Controllers\\{$controller}";

        $cont = new $link;
        return $cont->$action();

    }
}
