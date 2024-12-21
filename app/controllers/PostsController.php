<?php
// usado para orientar qual classe estou acessando em outros lugares
namespace App\Controllers;
use App\Request;

use App\Models\Post;

// controla o acesso a arquivos da view
class PostsController{
    public function store(): void
    {
        $img = Request::file()['img'];
        $filepath = $img['tmp_name'];
        $imgName = strtolower(str_replace(' ','-',$img['name']));
        $imgUrl = '../projeto-OOP/public/assets/thumbnails' . $imgName;
        if(move_uploaded_file($filepath, $imgUrl)){
            session_start();
            $_SESSION['success'] = 'Upload com sucesso!';
            header('location:create ');
        }

        (new Post)->storePost($imgUrl, Request::values());

    }
}