<?php
session_start();
include 'database.php';
include 'classes/Posts.php';
include 'classes/Images.php';

//Creates a new pdo-object and link it to the imageUpload-function
$image = new Images($pdo);
$image = $image->imageUpload();

//Creates a new pdo-object and link it to the addPost-function
$post = new Posts($pdo);
$post = $post->addPost();




include VIEW_ROOT . '/post_form.php';