<?php

namespace App\Models;

use Exception;

class Post{
    public static function storePost($imgUrl, $data){

        $data['thumbnail'] = $imgUrl;
        $thumbnail = explode("/" , 
        $data['thumbnail']);
        $thumbnail = end($thumbnail);

        try{
            $pdo = connect();
            $query = "INSERT INTO posts (title, thumbnail) 
            VALUES (:title, :thumbnail)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([
            ':title' => $data['title'],
            ':thumbnail' => $thumbnail
            ]);
        }catch(Exception $e){
            echo"erro". $e->getMessage();
        }
       
        // try{
        //     $stmt = connect()->prepare($query);
        //     $stmt->execute($data);
        // }catch(\Throwable $th){
        //     die($th->getMessage());
        // }

        // dd($data);
    }
}