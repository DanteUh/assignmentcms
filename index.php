<?php
session_start();


include 'app/database.php';

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();
$posts = $statement->fetchAll();

include VIEW_ROOT . '/home.php';
