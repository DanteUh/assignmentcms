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
    $statement = $this->pdo->prepare("
    INSERT INTO posts (post_title, post_content)
    VALUES (:post_title, :post_content)
    ");

    $statement->execute([
      ':post_title' => $_POST['post_title'],
      ':post_content' => $_POST['post_content']
    ]);
  }
  public function updatePost()
  {
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
}
