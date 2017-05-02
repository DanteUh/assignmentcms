
<?php include '../error.php';
	  include '../classes/Posts.php';
	  include '../database.php';


$post_title = $_POST["post_title"];
$post_content = $_POST["post_content"];

$post = new Posts($pdo);
$post->add_post($post_title, $post_content);

var_dump($_POST["post_title"]);