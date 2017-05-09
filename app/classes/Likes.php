<?php

class Likes
{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function like_post()
    {
        //Checks data from statement in like_exists()
        if($this->like_exists()){
                echo "NONO MISTER!";
        }
        //if the like does not exist, insert a new like
        else{
            $statement = $this->pdo->prepare("
            INSERT INTO likes (user_id, post_id)
            VALUES (:user_id, :post_id)");

            $statement->execute([
                ':user_id' => $_SESSION['user_id'],
                ':post_id' => $_GET['id']
            ]);
        }
    }
    
    //Checks if a like has been made by X user on X post
    private function like_exists() {
        $statement = $this->pdo->prepare("
            SELECT * FROM likes
            WHERE user_id = :user_id
            AND post_id = :post_id");
        
        $statement->execute([
            ':user_id' => $_SESSION['user_id'],
            ':post_id' => $_GET['id']
        ]);
        
        //Saves and return the data from the statement
        return $statement->fetch();
    }
    
    //Not finished!! :)
    public function count_likes()
    {
        $statement = $this->pdo->prepare("
        SELECT posts.post_id, posts.title
        COUNT(likes.like_id) AS likes
        FROM posts

        INNER JOIN likes
        ON posts.post_id = likes.post_id

        GROUP BY posts.post_id");

        $statement->execute();
    }
}
