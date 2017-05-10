<?php

class Posts
{
  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  // public function getAllPosts(){
  //   $statement = $this->pdo->prepare("
  //   SELECT * FROM posts
  //   INNER JOIN users ON posts.user_id = users.id
  //   ORDER BY created_time DESC
  //   ");
  //
  //   $statement->execute();
  //   $posts = $statement->fetchAll();
  //
  //   return $posts;
  // }
  // function to add a new post
  public function addPost()
  {

    $_SESSION['msg_post'] = '';

    //Checkar om användaren skrivit i både titel- och innehållsfältet
    if(!empty($_POST['post_title']) && !empty($_POST['post_content'])){
    // prepare pdo with info for values to be inserted into posts table
    $statement = $this->pdo->prepare("
    INSERT INTO posts (post_title, post_content, user_id)
    VALUES (:post_title, :post_content, :user_id)
    ");

    // execute statement with session and post values
    $statement->execute([
      ':post_title' => $_POST['post_title'],
      ':post_content' => $_POST['post_content'],
      ':user_id' => $_SESSION['user_id']

    ]);
    $_SESSION['success'] = 'Ditt blogginlägg är nu postat!';
    header('Location: /');
    } 
    //Exekverar om användaren inte skrivit i alla input-fält
    else {
            $_SESSION['msg_post'] = 'Vänligen skriv några rader innan du skickar ditt inlägg.';
            header('Location: /new_post.php');
        //  echo $_POST['error'];
        }  
  }






  // function to update/edit a post
  public function updatePost()
  {
    $_POST['msg_post'] = '';
    //Checkar om användaren skrivit i både titel- och innehållsfältet
    if(!empty($_POST['post_title']) && !empty($_POST['post_content'])){

    $id = $_POST['post_id'];
    $title = $_POST['post_title'];
    $content = $_POST['post_content'];

    $statement = $this->pdo->prepare("
    UPDATE posts
    SET post_title = :post_title, post_content = :post_content, updated_time = NOW()
    WHERE post_id = :post_id
    ");

    $statement->execute([
      'post_id' => $id,
      'post_title' => $title,
      'post_content' => $content
    ]);

    header('Location: /');
    } 
    //Exekverar om användaren inte skrivit i alla input-fält
    else {
            return $_POST['msg_post'] = 'Du har inte ändrat något i posten än.';
            header('Location: /edit_post.php');
        //  echo $_POST['error'];
        }  
  }


  // function to delete an existing post
  public function deletePost()
  {
    $id = $_POST['post_id'];

    $statement = $this->pdo->prepare("
    DELETE FROM posts
    WHERE post_id = :post_id
    ");

    $statement->execute([
      'post_id' => $id
    ]);

    header('Location: /');
  }
}