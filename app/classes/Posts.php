<?php

class Posts
{
  private $pdo;

  public function __construct($pdo)
  {
  	$this->pdo = $pdo;
  }

  public function addPost()
  {
    //Try connect to the database
    try
    {
    $statement = $this->pdo->prepare("
    INSERT INTO posts (post_title, post_content, user_id)
    VALUES (:post_title, :post_content, :user_id)
    ");

    $statement->execute([
      ':post_title' => $_POST['post_title'],
      ':post_content' => $_POST['post_content'],
      ':user_id' => $_SESSION['user_id']
    ]);
    }
    //If we don't connect: throw an exception
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
  }



  public function updatePost()
  {
    $id = $_POST['post_id'];
    $title = $_POST['post_title'];
    $content = $_POST['post_content'];

    //Try connect to the database
    try
    {
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
    //If we don't connect: throw an exception
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}
