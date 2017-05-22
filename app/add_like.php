<?php
session_start();

include 'database.php';
include 'classes/Likes.php';

//Creates a new pdo-object and link it to the addLike-function
$like = new Likes($pdo);

$like->add_like();

