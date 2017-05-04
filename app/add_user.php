<?php
include 'database.php';
include 'classes/Users.php';

header('Location: /app/views/templates/message_reg.php');

$user = new Users($pdo);
$user-> addUser();