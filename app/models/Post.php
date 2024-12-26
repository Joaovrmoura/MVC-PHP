<?php

namespace App\Models;

use Exception;

// model que interage diretamente com o banco de dados
class Post
{

    // exibe todas as postagens
    public function allPosts()
    {
        try {
            $pdo = connect();
            $stmt = $pdo->query("SELECT * FROM posts");
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // exibe a postagem referente ao id 
    public function showPost($table, $id)
    {
        try {
            $pdo = connect();
            $stmt = $pdo->prepare("SELECT * FROM {$table} WHERE id=?");
            $stmt->bindValue(1, $id, \PDO::PARAM_INT);
            $stmt->execute();
            $post = $stmt->fetch(\PDO::FETCH_OBJ);
            if ($post) {
                return $post;
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    // guarda imagens
    public static function storePost($imgUrl, $data)
    {
        // imgUrl é o nome da imagem, atribuido ao nome thumbnail
        // $data['thumbnail'] = $imgUrl;
        $thumbnail = explode("/",$imgUrl);
        $thumbnail = end($thumbnail);
        
        try {
            $pdo = connect();

            $query = "INSERT INTO posts (title, description, thumbnail) 
            VALUES (:title, :description, :thumbnail)";

            $stmt = $pdo->prepare($query);
            $stmt->execute([
                ':title' => $data['title'],
                ':description' => $data['description'],
                ':thumbnail' => $thumbnail
            ]);
            
        } catch (Exception $e) {
            echo "erro" . $e->getMessage();
        }
    }
    

    // update de posts
    public function edit($id, $table, $data)
    {
        try {
            $pdo = connect();
            $stmt = $pdo->prepare("UPDATE {$table} SET title = :title, description = :description WHERE id= :id");
            return $stmt->execute([
                ':title'=> $data['title'],
                ':description' => $data['description'],
                ':id' => $id
            ]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // deleta posts basedo no id
    public function deletePost($id)
    {
        try {
            $pdo = connect();

            $stmt = $pdo->prepare("DELETE FROM posts WHERE id=?");
            $stmt->bindParam(1, $id, \PDO::PARAM_INT);
            return $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
