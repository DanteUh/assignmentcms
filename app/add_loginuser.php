<?php
session_start();

include 'database.php';
include 'classes/Users.php';

//Creates a new pdo-object and link it to the userLogin-function
$userLogin = new Users($pdo);
$userLogin->login();

include VIEW_ROOT . '/login_form.php';

