
<?php

class Users
{

	private $pdo;
    
    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    
    public function register()
    {

    try
    {

           $new_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $statement = $this->pdo->prepare("
        	INSERT INTO users(username, email, password)
        	VALUES (:username, :email, :password)");
              
        	$statement->execute([
            ':username' => $_POST['username'],
            ':email' => $_POST['email'],
            ':password' => $new_password
        ]);

  
           return $statement;
       }

       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    


        
    }
    
    public function login()
    {
        $statement = $this->pdo->prepare("
        SELECT * FROM users WHERE username = :username");
        $statement->execute([
            ":username" => $_POST['username'],
            ":password" => $_POST['password']
        ]);
    }


 }



 ?>