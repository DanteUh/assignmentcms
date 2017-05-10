<?php

include 'database.php';
include 'classes/Users.php';


$user = new Users($pdo);
$res = $user->addUser();


include VIEW_ROOT . '/reg_form.php';