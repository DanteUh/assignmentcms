<?php
session_start();
include 'app/database.php';
include 'app/classes/Posts.php';

$posts = new Posts($pdo);
$posts = $posts->getUsersPosts();


include VIEW_ROOT . '/your_posts.php';
