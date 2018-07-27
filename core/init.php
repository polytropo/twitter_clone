<?php  
	// Include db, and all classes, order matters
	include 'database/connection.php';
	include 'classes/User.php';
	include 'classes/Tweet.php';
	include 'classes/Follow.php';
	// Include global connection
	global $pdo;
	// start a session
	session_start();

	// Instantiate new classes, pass in required variables bcs of construct method
	$getFromU = new User($pdo);
	$getFromT = new Tweet($pdo);
	$getFromF = new Follow($pdo);

	// Constant value for URL to get full url of site
	define("BASE_URL", "http://localhost/twitter/");
?>