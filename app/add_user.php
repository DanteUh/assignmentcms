<?php
include 'database.php';
include 'classes/Users.php';

$user = new Users($pdo);
$user->addUser();
