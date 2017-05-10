<?php

include 'database.php';
include 'classes/Likes.php';

$like = new Likes($pdo);
echo $like->count_likes($data['post_id']);