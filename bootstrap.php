<?php

use App\{Router, Request};

// App::bind("config", require "config.php");

// $pdo = Connection::make(
//     App::get('config')['database']
// );

// métodos staticos das classes dentro de migrations
// são carregadas no autoload do composer dentro do 
// index.php da pasta raiz
CreateUserTable::createUserTable(connect());
CreatePostsTable::createPostsTable(connect());

Router::load("routes.php")
    ->show(Request::uri(), Request::method());


// function view($view, $data=null){
//     require "views/{$view}.view.php";
// }