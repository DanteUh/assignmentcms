<?php
session_start();

include 'app/database.php';
//This is where the request of the page runs

//Checks if pages with posts are empty
if(empty($_GET['page'])){
  $post = false;
} else {
  //If posts exists, fetch them and put them in the data-variable for it to be displayed in the show.php-file
  $post = $_GET['page'];

  $statement = $pdo->prepare("
  SELECT * FROM posts
  INNER JOIN users ON posts.user_id = users.id
  WHERE post_id = :post_id
  ");

  $statement->execute(['post_id' => $post]);

  $data = $statement->fetch();

  if($data){
    $data['created_time'];
    if($data['updated_time']){
      $data['updated_time'];
    }
  }
}

if($_SESSION == true){
  $amountOfLikes = $pdo->prepare("
    SELECT COUNT(like_id)
    FROM likes
    WHERE post_id = :post_id
  ");
  $amountOfLikes->execute([
    ':post_id' => $_GET['page']
  ]);
  $allTheLikes = $amountOfLikes->fetch();
  // var_dump($_SESSION);
  $statement = $pdo->prepare("
    SELECT * FROM likes
    WHERE user_id = :user_id
    AND post_id = :post_id");
  $statement->execute([
    ':user_id' => $_SESSION['user_id'],
    ':post_id' => $_GET['page']
  ]);
  $like = $statement->fetch();
}


include VIEW_ROOT . '/page/show.php';
