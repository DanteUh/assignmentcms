<?php session_start(); ?>
<!--Index sköter första requesten -->
<?php include 'app/database.php'; 


$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();
$posts = $statement->fetchAll();

//När vi har alla posts, skickar vi vidare requesten  till home-php
 include VIEW_ROOT .  '/home.php';


 