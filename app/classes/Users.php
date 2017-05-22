<?php

class Users
{


      private $pdo;

      public function __construct($pdo){
          $this->pdo = $pdo;
      }

     
      // Function that registrates a new user
      public function addUser(){
      // To check if user has typed in all input-fields
      if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){

        $_POST['msg_adduser'] = '';
        $_POST['msg_user_reg'] = '';
        //Run the userExists-function to see if this user is not already in the database
        if($this->userExists()){
          return $_POST['msg_adduser'] = 'This user already exists';
        } else {
          //Hash the password to be sent in the database
          $new_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
          $statement = $this->pdo->prepare("
            INSERT INTO users (username, email, password)
            VALUES (:username, :email, :password)
          ");
          
          $statement->execute([
              ':username' => $_POST['username'],
              ':email' => $_POST['email'],
              ':password' => $new_password
          ]);
          return $_POST['msg_user_reg'] = 'You have now been registered!';
        }     
      }
      // This will run if the user has not typed in the input-fields
      else{
        return $_POST['msg_adduser'] = 'Please, write a username, email and password';
      }
      }

      // Function that checks if the user is not already in the database
      private function userExists(){
        
          $statement = $this->pdo->prepare("
            SELECT username, email FROM users
            WHERE username = :username
            OR email = :email 
          ");

          $statement->execute([
              ':username' => $_POST['username'],
              ':email' => $_POST['email']
          ]);

         //Saves and return the data from the statement
         return $statement->fetch();
    
      }

      // Function that logs in user
      public function login()
      {
       // To check if user has typed in both input-fields
       if(!empty($_POST['username']) && !empty($_POST['password'])){

         $statement = $this->pdo->prepare('SELECT id, username, email, password, role FROM users WHERE username = :username');
         $statement->bindParam(':username', $_POST['username']);
         $statement->execute();
         //Fetch what is matched with the input
         $results = $statement->fetch(PDO::FETCH_ASSOC);
         //Tror inte den här behövs, eller gör om den till $_SESSION['msg_log'] = '' 
         $msg_log = '';
           if(password_verify($_POST['password'], $results['password'])){

             $_SESSION['user_id'] = $results['id'];

             $_SESSION['loggedin'] = true;

             $_SESSION['username'] = $results['username'];

             $_SESSION['admin'] = $results['role'];

             $_SESSION['success'] = 'Hey ' . '<strong>' .$results['username'] .'</strong>' . ', you are now logged in!';
    
             //Redirects to the root-directory
             header('Location: /');
             // Return an error-message if the password-input is not matched with the input
           } elseif(!password_verify($_POST['password'], $results['password'])) {

                return $_POST['error'] = 'Wrong username or password. Please try again!';
   
           }
           // Return an error-message if the user has not typed in both fields
         } else {
          
                return $_POST['error'] = 'Please, write a username and password.';
   
         }
     }


}



