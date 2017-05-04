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
}
