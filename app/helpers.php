<?php

use App\App;
use database\Connection;

// Configurações gerais 

// Função dd: Debug e dump para depuração
if(!function_exists('dd')){
    function dd($data){
        echo'<pre>';
            die(var_dump($data));
        echo'</pre>';
    }
}

// Liga uma configuração global ao contêiner da aplicação
if(!function_exists('connect')){
    function connect(){
        App::bind("config", require "config.php");

        return Connection::make(
        App::get('config')['database']
        );
        
    }
}

// Função view: Gerencia as rotas e renderiza as views
// rotas da aplicação, recebe o nome da rota e pode receber os dados
// após isso redireciona para página correta
if(!function_exists('view')){
    // se existe dados a serem mostrados $data !=null
    function view($view, $data=null){
        if($data != null){
            // importa os dados vindos de um array associativo 
            // para a página atual
            extract($data);
        }
        require "views/{$view}.view.php";
    }
}


if(!function_exists('setSession')){
    function setSession($key, $text){
        $_SESSION[$key] = $text;
    }
}

// Inicia uma sessão e o buffer de saída, essas funções abaixo são utlizadas dentro 
// de PostController, para lidar com as $_SESSIONS e redirecionar o usuário
if(!function_exists('startSession')){
    function startSession(){
        ob_start();
        session_start();
    }
}

if(!function_exists('getSession')){
    function getSession($name){
        return $_SESSION[$name];
    }
}

if(!function_exists('unsetSession')){
    function unsetSession($name){
        unset($_SESSION[$name]);
    }
}
if(!function_exists('redirect')){
    function redirect($route){
        header('location:' . $route);
    }
}


