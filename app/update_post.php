<?php
session_start();
include 'database.php';
include 'classes/Posts.php';

//Creates a new pdo-object and link it to the updatePost-function
$post = new Posts($pdo);
$post->updatePost();
