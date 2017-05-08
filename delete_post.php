<?php
include 'app/database.php';

$id = $_GET['id'];

$post = $pdo->prepare("SELECT * FROM posts WHERE post_id = :post_id");
$post->execute(['post_id' => $id]);

$post = $post->fetch();


include VIEW_ROOT . '/delete_post_form.php';
