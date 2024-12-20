<?php
// nome do diretório raiz, 
//para lidar com o bug da rota vazia
$baseName = basename(__DIR__);

// @ separa o método da classe da classe em si
// acesso o index
$router->get(
    strtolower($baseName), 
    'DashboardController@index'
);
// acessando os itens da minha dashboard com método
// ver posts
$router->get(
    'posts', 
    'DashboardController@allPosts'
);
// criar posts
$router->get(
    'create', 
    'DashboardController@create'
);

// editar posts
$router->get(
    'edit', 
    'DashboardController@edit'
);

$router->post(
    'delete', 
    'DashboardController@delete'
);
$router->get(
    'login', 
    'DashboardController@login'
);

$router->get(
    'register', 
    'DashboardController@register'
);

