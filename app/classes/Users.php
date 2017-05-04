<?php

class Users
{


	  private $pdo;
    
    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    
    public function addUser()
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
    
    /* EJ KLAR KOLLA VIDEO
    public function login()
    {
      if(!empty($_POST['username']) && !empty($_POST['password'])):

        $statement = $this->pdo->prepare('SELECT id,username,email,password FROM users WHERE email = :email');
        $statement->bindParam(':email', $_POST['email']);
        $statement->execute();
        $results = $statement->fetch(PDO::FETCH_ASSOC);

          if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){

            /*$_SESSION['id'] = $results['id'];
            $msg = 'You successfully logged in';
            header("Location: /");
            die('trying it');
          
          }
          else{

              die('Sorry, those credentials do not match');
          
          }
        
          endif;
        
    }*/

    }