
<?php

include '../error.php';
include '../database.php';

?>

<?php

class Posts
{


  	private $pdo;

  	public function __construct($pdo)
  	{
    	$this->pdo = $pdo;
  	}


	//Funktion som skriver ut titel och innehåll på varje skapade bloggpost
	public function printAllPosts()
  	{
	  	//Prepare SQL query
	    $statement = $this->pdo->prepare("SELECT post_title, post_content FROM posts");
	    //Execute statement, fetch data
	    $statement->execute();

	    $posts = $statement->fetchAll();
    
	    foreach ($posts as $row){
	    	echo "<p>" . $row["post_title"] . "</p><br>";
			echo "<p>" . $row["post_content"] . "</p><br>";
	    }

  	}

  	//Funktion som lägger till en ny post från form
  	public function addPost()
  	{
	    $statement = $this->pdo->prepare("INSERT INTO posts (post_title, post_content)
	    VALUES (:post_title, :post_content)");
	    
	    $statement->execute([
	      ':post_title' => $_POST['post_title'],
	      ':post_content' => $_POST['post_content']
	    ]);
  	}


  	//Funktion som ändrar en existerande post
  	public function editPost()
  	{
	    $statement = $this->pdo->prepare("UPDATE posts SET (post_title, post_content)
	    VALUES (:post_title, :post_content)");

	    $statement->execute([
	      ':post_title' => $_POST['post_title'],
	      ':post_content' => $_POST['post_content']
	    ]);
  	}


}


?>