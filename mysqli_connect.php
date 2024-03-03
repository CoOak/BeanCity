<?php

// //define constant variables
// define('DB_NAME', 'beanpj');
// define('DB_USER', 'root');
// define('DB_PASSWORD', '');
// define('DB_HOST', 'localhost');
// define('port', '3310');

try {

	//connection variable
	$con = mysqli_connect("localhost", "root", "", "beanpj", 3310);

	//encoded language
	mysqli_set_charset($con, charset: 'utf8');
} catch (Exception $ex) {
	print "An Exception occured.Message:" . $ex->getMessage();
} catch (Error $e) {
	print "The system is busy please try later";
}
