<?php

App::bind("config", require "config.php");

$pdo = Connection::make(
    App::get('config')['database']
);

// métodos staticos das classes dentro de migrations
// são carregadas no autoload do composer dentro do 
// index.php da pasta raiz
CreateUserTable::createUserTable($pdo);
CreatePostsTable::createPostsTable($pdo);

require Router::load("routes.php")
    ->show(Request::uri());
