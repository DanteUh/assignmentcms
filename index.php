<?php
session_start();


include 'app/database.php';


// this will fetch all existing posts from posts table and show them in home.php
$statement = $pdo->prepare("
SELECT * FROM posts
INNER JOIN users ON posts.user_id = users.id
ORDER BY created_time DESC
");
$statement->execute();
$posts = $statement->fetchAll();

include VIEW_ROOT . '/home.php';
