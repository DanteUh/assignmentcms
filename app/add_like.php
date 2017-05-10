<?php
session_start();

include 'database.php';
include 'classes/Likes.php';

$like = new Likes($pdo);
$like->add_like();
