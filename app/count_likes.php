<?php

include 'database.php';
include 'classes/Likes.php';

//Creates a new pdo-object and link it to the count_likes-function
$like = new Likes($pdo);
echo $like->count_likes($data['post_id']);