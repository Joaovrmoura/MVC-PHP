<?php
// nome do diretório raiz, 
//para lidar com o bug da rota vazia
$baseName = basename(__DIR__);

// @ separa o método da classe da classe em si
// acesso o index
$router->get( strtolower($baseName),'DashboardController@index');
// acessando os itens da minha dashboard com método navegação entre aos links do menu
$router->get('create', 'DashboardController@create');
// $router->get('posts', 'DashboardController@allPosts');
$router->get('edit', 'DashboardController@edit');
$router->post('delete', 'DashboardController@delete');

$router->get('posts', 'PostsController@index');
$router->post('store', 'PostsController@store');
$router->get('show', 'PostsController@show');
$router->post('delete', 'PostsController@destroy');
$router->get('edit', 'PostsController@editView');

$router->get('update', 'PostsController@editPost');

$router->get('login', 'DashboardController@login');
$router->get('register', 'DashboardController@register');