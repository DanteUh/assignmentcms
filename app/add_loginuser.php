<?php
session_start();
include 'database.php';
include 'classes/Users.php';

header('Location: /app/views/home.php');

$userLogin = new Users($pdo);
$userLogin->login();



