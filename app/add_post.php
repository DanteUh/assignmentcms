<?php
session_start();
include 'database.php';
include 'classes/Posts.php';


$post = new Posts($pdo);
$post = $post->addPost();

include VIEW_ROOT . '/post_form.php';