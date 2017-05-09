<?php require VIEW_ROOT . 'database.php';

class Likes()
{
    private $pdo;
    
    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    
    //Mostly done I think. Made with help from video:
    // https://www.youtube.com/watch?v=PQMtLDxOQRk
    public static function like_post()
    {
        //If the button has type = post and has a post_id that exists
        //Then We can like something and send it to our database
        if(isset($_GET['type'], $_GET['id']) && $_GET['type'] == "post"){
            //The query checks if the post actually exists (WHERE EXIST)
            //and creates 0 rows if the user has already liked it (NOT EXIST)
            $statement = $this->pdo->prepare("
            INSERT INTO likes(user_id, post_id)
            VALUES (:user_id, :post_id)
            WHERE EXISTS (
                SELECT id FROM posts WHERE post_id = :post_id)
            AND NOT EXIST (
                SELECT post_id FROM likes
                WHERE user_id = :user_id
                AND post_id = :post_id)
            LIMIT 1");

            $statement->execute([
                ':user_id' => $_SESSION['user_id'],
                ':post_id' => $_GET['post_id']
            ]);
        }
    }
    
    public static function count_likes()
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

//Test för att kunna komma åt funktionerna i klassen och få ut dess url:er när man kallar på dem. Oklart om det ens hjälper. 
/*if(isset($_GET['type']) && method_exists('Likes', $_SESSION['user'])){
    $like = new Likes();
    $like->$_GET['post_id'](); 
} else {
    echo 'Function not found';
}*/