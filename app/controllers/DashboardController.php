<?php
// usado para orientar qual classe estou acessando em outros lugares
namespace App\Controllers;


// controla o acesso a arquivos da view
class DashboardController{
    public function index(){
        return view("index");
    }
    public function allPosts(){
        return view("posts");
    }
    public function create(){
        return view("create");
    }
    //edit post
    public function edit(){
        return view("edit");
    }
    public function delete(){
        echo "delete";
    }
    public function login(){
        return view("login");
    }
    public function register(){
        return view("register");
    }
    
}