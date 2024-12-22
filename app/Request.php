<?php

namespace App;

// uso para preencher os paâmetros da aplicação
// com as requisições corretas
class Request{
    public static function uri(){

        // pega o nome da url, depois do nome do diretório raizo
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
    
        //  retorna a ultima string como a url parâmetro para routes
        return end($last);
    }
    // métodos de requisição(utilizados na classe PostController)
    // para receber os falores vindo por diferentes métodos
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