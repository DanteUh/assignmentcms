<?php
session_start();

include 'database.php';
include 'classes/Users.php';

header('Location: /');

$userLogin = new Users($pdo);
$userLogin->login();
