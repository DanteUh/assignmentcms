<?php
session_start();

include 'app/database.php';
//This is where the request of the page run
//Om jag vill hämta ut bilderna från databasen och visa dem tillsammans med posts, gör jag en ny statement under eller kan jag 
//hämta bilderna samtidigt som jag hämtar postsen i samma sql-query?

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
