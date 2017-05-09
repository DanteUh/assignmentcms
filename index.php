<!--Index sköter första requesten -->
<?php
session_start();


include 'app/database.php';

$statement = $pdo->prepare("
SELECT * FROM posts
INNER JOIN users ON posts.user_id = users.id
ORDER BY created_time DESC
");
$statement->execute();
$posts = $statement->fetchAll();


//När vi har alla posts, skickar vi vidare dessa till home
include VIEW_ROOT . '/home.php';
