<?php

namespace App;

// uso para preencher os parâmetros da aplicação
// com as requisições corretas
class Request{
    public static function uri(){

        // pega o nome da url, depois do nome do diretório raíz
        $uri = trim(
            parse_url(
            $_SERVER['REQUEST_URI'], 
            PHP_URL_PATH), 
            '/'
        );
        //separa as strings da url
        $last = explode(
            '/', 
            $uri
        );
    
        //  retorna a última string como url parâmetro para routes
        return end($last);
    }
    // métodos de requisição(utilizados na classe PostController)
    // retorna os dados dos diferentes tipos de requisição
    public static function method(){
        return $_SERVER['REQUEST_METHOD'];
    }
    public static function values(){
        return $_REQUEST;
    }
    public static function file(){
        return $_FILES;
    }
}