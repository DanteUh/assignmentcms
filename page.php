<?php session_start(); ?>
<?php

include 'app/database.php';
//Det är är själva requesten sker av page.

if(empty($_GET['page'])){
  $post = false;
} else {
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
