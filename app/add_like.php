<?php
session_start();

include 'database.php';
include 'classes/Likes.php';


$like = new Likes($pdo);
$like->like_post();

$likeAgain = new Likes($pdo);
$likeAgain->like();

