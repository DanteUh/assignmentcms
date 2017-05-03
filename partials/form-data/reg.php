<?php
	include '../database.php';
    include '../error.php';
    include '../classes/Users.php';


	$testUser = new Users($pdo);
	$testUser->register();




