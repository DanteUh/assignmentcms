<?php
include 'database.php';
include 'classes/Posts.php';

header('Location: /');

$post = new Posts($pdo);
$post->addPost();
