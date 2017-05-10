<?php
session_start();
include 'database.php';
include 'classes/Posts.php';

$post = new Posts($pdo);
$post->updatePost();
