<?php
session_start();

include 'database.php';
include 'classes/Likes.php';

//Creates a new pdo-object and link it to the delete_like-function
$like = new Likes($pdo);
$like->delete_like();