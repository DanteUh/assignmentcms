<?php

class Likes
{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }


    public function like_post()
    {
        //If the button has type = post and has a post_id that exists
        //Then We can like something and send it to our database
        if(isset($_GET['type'], $_GET['id']) && $_GET['type'] == "post"){
            //The query checks if the post actually exists (WHERE EXIST)
            //and creates 0 rows if the user has already liked it (NOT EXIST)
            echo 'hej';
            var_dump($_GET['id'], $_SESSION['user_id']);

            $statement = $this->pdo->prepare("SELECT * FROM likes");
            $statement->execute();
            $likes = $statement->fetchAll();

            foreach($likes as $like){
              if($_SESSION['user_id'] === $like['user_id']){
                $statement = $this->pdo->prepare("
                DELETE FROM likes
                WHERE user_id = :user_id
                ");
                $statement->execute([
                  'user_id' => $_SESSION['user_id']
                ]);
              } else {
                $statement = $this->pdo->prepare("
                INSERT INTO likes (user_id, post_id)
                VALUES (:user_id, :post_id)
                ");
                $statement->execute([
                  ':user_id' => $_SESSION['user_id'],
                  ':post_id' => $_GET['id']
                ]);
              }
            }
        }
  
    }



            // $statement = $this->pdo->prepare("
            // INSERT INTO likes (user_id, post_id)
            // VALUES (:user_id, :post_id)
            // ");

            // INSERT INTO likes (user_id, post_id)
            // VALUES ({$_SESSION['user_id']}, {$_GET['id']})
            // WHERE EXISTS (
            //     SELECT post_id FROM posts WHERE post_id = {$_GET['id']})
            // AND NOT EXISTS (
            //     SELECT post_id FROM likes
            //     WHERE user_id = {$_SESSION['user_id']}
            //     AND post_id = {$_GET['id']})
            // LIMIT 1

            // INSERT INTO posts (post_title, post_content, user_id)
            // VALUES (:post_title, :post_content, :user_id)

            // $statement->execute([
            //     ':user_id' => $_SESSION['user_id'],
            //     ':post_id' => $_GET['id']
            // ]);
        
    }








    //Mostly done I think. Made with help from video:
    // https://www.youtube.com/watch?v=PQMtLDxOQRk
    /*public function like_post()
    {
        //If the button has type = post and has a post_id that exists
        //Then We can like something and send it to our database
        // if(isset($_GET['type'], $_GET['id']) && $_GET['type'] == "post"){
            //The query checks if the post actually exists (WHERE EXIST)
            //and creates 0 rows if the user has already liked it (NOT EXIST)
            var_dump($_GET['id'], $_SESSION['user_id']);


            $statement = $this->pdo->prepare("
            INSERT INTO likes (user_id, post_id)
            VALUES (:user_id, :post_id)
            WHERE NOT EXISTS (
              SELECT post_id FROM posts WHERE post_id = :post_id
              AND user_id = :user_id
            )
            ");

            // INSERT INTO likes (user_id, post_id)
            // VALUES ({$_SESSION['user_id']}, {$_GET['id']})
            // WHERE EXISTS (
            //     SELECT post_id FROM posts WHERE post_id = {$_GET['id']})
            // AND NOT EXISTS (
            //     SELECT post_id FROM likes
            //     WHERE user_id = {$_SESSION['user_id']}
            //     AND post_id = {$_GET['id']})
            // LIMIT 1
            //
            // INSERT INTO posts (post_title, post_content, user_id)
            // VALUES (:post_title, :post_content, :user_id)

            $statement->execute([
                ':user_id' => $_SESSION['user_id'],
                ':post_id' => $_GET['id']
            ]);
        // }
    }


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
    }*/


