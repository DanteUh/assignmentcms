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



include VIEW_ROOT . '/page/show.php';
