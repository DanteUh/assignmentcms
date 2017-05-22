<?php
include 'Images.php';

class Posts
{
  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }
  // Function that get all posts from each user
  public function getUsersPosts()
  {
    $statement = $this->pdo->prepare("
    SELECT * FROM posts
    INNER JOIN users ON posts.user_id = users.id
    WHERE users.id = :user_id
    ORDER BY created_time DESC
    ");

    $statement->execute([
      ':user_id' => $_SESSION['user_id']
    ]);

    return $posts = $statement->fetchAll();
  }

  // Function to add a new post
  public function addPost()
  {

      $_SESSION['msg_post'] = '';
      $_SESSION['success'] = '';


    // Checks if the user has typed in both fields
    if(!empty($_POST['post_title']) && !empty($_POST['post_content'])){


      //Creates a new pdo-object and link it to the imageUpload-function
      $image = new Images($this->pdo);
      $image = $image->imageUpload();

      // prepare pdo with info for values to be inserted into posts table
      $statement = $this->pdo->prepare("
      INSERT INTO posts (post_title, post_content, user_id, image)
      VALUES (:post_title, :post_content, :user_id, :image)
    ");

    // execute statement with session and post values
    $statement->execute([
      ':post_title' => $_POST['post_title'],
      ':post_content' => $_POST['post_content'],
      ':user_id' => $_SESSION['user_id'],
      ':image' => $image

    ]);
      $_SESSION['success'] = 'Your post has now been posted!';
      header('Location: /');
    }
    // If the user has not typed in the fields
    else {
      $_SESSION['msg_post'] = 'Please write something before you post!';
      header('Location: /new_post.php');
      //  echo $_POST['error'];
      }
  }



  //Function to update/edit a post
  public function updatePost()
  {

    $_SESSION['success'] = '';
    //Checks if the user has written anything in the title and content-fields
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

    $_SESSION['success'] = 'Your post has now been edited!';
    header('Location: /users_posts.php');
    }
    //If user hasn't edited anything
    else {
            $_SESSION['msg_edit'] = 'Please, type in something in both fields.';
            header('Location: /');
        }
  }


  //Function to delete an existing post
  public function deletePost()
  {

    $_SESSION['success'] = '';
    $id = $_POST['post_id'];

    $statement = $this->pdo->prepare("
    DELETE FROM posts
    WHERE post_id = :post_id
    ");

    $statement->execute([
      'post_id' => $id
    ]);
    $_SESSION['success'] = 'The post has now been deleted!';
    header('Location: /');
  }
}
