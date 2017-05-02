
<?php

include '../error.php';
include '../database.php';

?>

<?php

class Posts
{

	//lagt till början till konstruktor för ny post 30/4



  	private $pdo;

  	public function __construct($pdo)
  	{
    	$this->pdo = $pdo;
  	}
 	

	/*public function get_all_from($posts){

		include 'database.php';

		$statement = $this->pdo->prepare("
      	SELECT * FROM $posts");
    	$statement->execute();
    	return $statement->fetchAll();
    	echo $statement;
	}*/


	public function add_post($post_title, $post_content){
		$statement = $pdo->prepare("INSERT INTO posts (post_title, post_content)
      	VALUES(:post_title, :post_content)");
      	$statement->bindParam(':post_title', $post_title);
      	$statement->bindParam(':post_content', $post_content);
      	$statement->execute();
      	echo "New record created successfully";
	}

	public function print_post(){
		      	
		return "Post title: $this->post_title <br>
				Post content: $this->post_content";
	}
	
}


?>