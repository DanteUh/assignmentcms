
<?php

class Users
{
	//lagt till början till konstruktor för ny användare 30/4
	public $username;
  	public $email;
  	public $password;
  	public $role;

  	public function __construct($username, $email, $password, $role){

	    $this->username = $username;
	    $this->email = $email;
	    $this->password = $password;
	    $this->role = $role;
  	}


 }



 ?>