
<?php
  include '../error.php';
  include '../classes/Comments.php';
  include '../database.php';

  $comment = new Comments($pdo);
  $comment->addComment();
