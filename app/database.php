<?php

//To display error-messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Defines the paths
define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost:8888');


$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false
];

/*$pdo = new PDO(
  "mysql:host=sql11.freemysqlhosting.net:3306;dbname=sql11172326;charset=utf8",
  "sql11172326",
  "qAuSUNvuFV", $options);
*/

 $pdo = new PDO(
  "mysql:host=localhost:8889;dbname=bloggis;charset=utf8",
  "root",
  "root", $options);