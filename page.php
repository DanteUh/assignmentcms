
<?php

include 'app/database.php';
//Det är är själva requesten sker av page. 
var_dump($_GET['page']);
if(empty($_GET['page'])){
  $post = false;
} else {
  $post = $_GET['page'];

  $statement = $pdo->prepare("SELECT * FROM posts WHERE post_id = :post_id");

  $statement->execute(['post_id' => $post]);

  $data = $statement->fetch();

  if($data){
    $data['created_time'] = new DateTime($data['created_time']);
    if($data['updated_time']){
      $data['updated_time'] = new DateTime($data['updated_time']);
    }
  }
}

include VIEW_ROOT . '/page/show.php';
