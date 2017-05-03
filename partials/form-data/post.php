
<?php include '../error.php';
	  include '../classes/Posts.php';
	  include '../database.php';


/*$post_title = $_POST['post_title'];
$post_content = $_POST['post_content'];

$post = new Posts($pdo);
$post->addPost();*/

	/*Skapar ny instans av pdo-objekt och kopplar till addPost och printAllPosts-funktionerna*/
	$post = new Posts($pdo);
	$post->addPost();

	$post = new Posts($pdo);
	$post->printAllPosts();

	/*Skriver ut den tillagda posten*/
	echo $post_title = $_POST['post_title'];
	echo "<br>";
	echo $post_content = $_POST['post_content'];

	/*echo $post_title = $_GET['post_title'];
	echo "<br>";
	echo $post_content = $_GET['post_content'];*/

/*var_dump($_POST["post_title"]);*/