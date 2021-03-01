<?php
$errors = array();

/* Add Subscription */
if (isset($_POST['subscribe_btn'])) {
    addSubscriber($_POST);
}
    
function addSubscriber($request_values) {
    global $conn, $errors, $BASE_URL;
    $email = esc2($request_values['subscribe']);
    
    if(empty($email)) { array_push($errors, "An email is required to subscribe.");  }
    // Ensure that no email is subscribed twice.
	$user_check_query = "SELECT * FROM subscribers WHERE email='email' LIMIT 1";
	$result = mysqli_query($conn, $user_check_query);
	$user = mysqli_fetch_assoc($result);
	if ($user) { // if user exists
	  array_push($errors, "This email is already subscribed.");
	}
	// add subscriber if there are no errors in the form
	if (count($errors) == 0) {
		$query = "INSERT INTO subscribers (email, created_at) 
				  VALUES('$email', now())";
		mysqli_query($conn, $query);

		$_SESSION['message'] = "You've subscribed successfully!";
		header('location: ' . $_SERVER['PHP_SELF']);
		exit(0);
	}
}

/* * * * * * * * * * * * * * * * * * * * *
* - Escapes form submitted value, hence, preventing SQL injection
* * * * * * * * * * * * * * * * * * * * * */
function esc2(String $value){
	// bring the global db connect object into function
	global $conn;
	// remove empty space sorrounding string
	$val = trim($value); 
	$val = mysqli_real_escape_string($conn, $value);
	return $val;
}
?>