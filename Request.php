<?php

class Request{

    public static function uri(){
        // variável que guarda o nome do diretório raiz
        $baseName = basename(__DIR__);

        // pega o nome da url, depois do nome do diretório raizo
        $requestUri = trim($_SERVER['REQUEST_URI'], '/');
        $segments = explode('/', $requestUri);
        $lastSegment = end($segments);
        // compara o nome do diretório com o nome vindo na url, 
        // se o nome for igual do repositorio retorna uma string vazia com
        // que vai para o routes e redireciona para o index.php
        if(strtolower($lastSegment) == strtolower($baseName)){
            $lastSegment = '';
            return $lastSegment;
        }
        //  retorna a url como parâmetro para routes
        return $lastSegment;
    }
}