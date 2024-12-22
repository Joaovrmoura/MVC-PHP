<?php

use App\{Router, Request};

// métodos staticos das classes dentro de migrations
// são carregadas no autoload do composer dentro do 
// index.php da pasta raiz
CreateUserTable::createUserTable(connect());
CreatePostsTable::createPostsTable(connect());

// importa as informações de routes(no método existe um require routes.php) 
// e encadeia o método show(que recebe dois métodos para valida se a URI existe no array de rotas do método correspondente.) 
// ainda dentro de show se a uri existir dentro do método de requisição certo vou usar a 
// function(callMethod que vai separar o método do controlador)
// uri = url, method = é o tipo de requisição
Router::load("routes.php")
    ->show(Request::uri(), Request::method());
