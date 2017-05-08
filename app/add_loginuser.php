<?php
session_start();

include 'database.php';
include 'classes/Users.php';


$userLogin = new Users($pdo);
$userLogin->login();
