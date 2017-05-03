
<?php

		$options = [ 
		  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		  PDO::ATTR_EMULATE_PREPARES   => false
		];

		//Instansiera nytt PDO-objekt
		$pdo = new PDO(
		  "mysql:host=localhost:8889;dbname=bloggis;charset=utf8",
		  "root",
		  "root", $options);


