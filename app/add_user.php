<?php session_start() ?>

<?php
include 'database.php';
include 'classes/Users.php';


$user = new Users($pdo);
$user->addUser();

include VIEW_ROOT . '/reg_form.php';