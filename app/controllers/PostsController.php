<?php
// usado para orientar qual classe estou acessando em outros lugares
namespace App\Controllers;
use App\Request;
use App\Models\Post;

// controla o acesso a arquivos da view
class PostsController{
    public function index(){
        // acessa o método da classe post e retorna para a função view 
        $posts = (new Post)->allPosts();
        // view recebe o nome da url e os dados vindos de um array associativo(vindo de allPosts)
        return view("posts", ['posts' => $posts]);
    }

    public function store(): void
    {
        // Request retorn a forma de requsição,
        // sendo elas os métodos FILE(esse caso), REUQUEST e VALUES
        $img = Request::file()['img'];
        $filepath = $img['tmp_name'];
        $imgName = strtolower(str_replace(' ','-',$img['name']));
        $imgUrl = '../projeto-OOP/public/assets/thumbnails' . $imgName;
        (new Post)->storePost($imgUrl, Request::values());
        if(move_uploaded_file($filepath, $imgUrl)){
            startSession();
            setSession('success', 'Upload com sucesso!');
            redirect('create');
        }
    }
    // o nome dos métodos são passados para as routes.php
    // para separar o método da classe
    public function show(){
        $post = (new Post)->showPost('posts', Request::values()['id']);
        return view("show", ['post' => $post]);
    }
    public function editPost(){
        $post = (new Post)->edit($_GET['id'], 'posts',  Request::values());
        startSession();
        setSession('success', 'Update com sucesso!');
        redirect('posts');
    }
    public function destroy(){
        $post = (new Post)->deletePost(Request::values()['id']);
        startSession();
        setSession('success', 'Deletado com sucesso!');
        redirect('posts');
    }
}