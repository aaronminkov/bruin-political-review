<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "bruicypz_admin", "dARIEsSaHFRI", "bruicypz_bprjournal");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'https://bruinpoliticalreview.org/');
?>