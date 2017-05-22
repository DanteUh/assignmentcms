<?php
session_start();
include 'database.php';
include 'classes/Posts.php';

//Creates a new pdo-object and link it to the deletePost-function
$post = new Posts($pdo);
$post->deletePost();
