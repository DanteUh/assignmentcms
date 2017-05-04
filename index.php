<!--Index sköter första requesten -->
<?php

include 'app/database.php';

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();
$posts = $statement->fetchAll();

//När vi har alla posts, skickar vi vidare dessa till home
include VIEW_ROOT .  '/home.php';