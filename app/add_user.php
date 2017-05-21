<?php

include 'database.php';
include 'classes/Users.php';

//Creates a new pdo-object and link it to the addUser-function
$user = new Users($pdo);
$res = $user->addUser();

include VIEW_ROOT . '/reg_form.php';