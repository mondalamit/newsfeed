<?php
// get username and password
$username = $_POST["usernameCreate"];
$password = $_POST["passwordCreate"];

// create our data object
$data = array();

// decode the accounts file to associative array
$accounts = json_decode(file_get_contents("accounts.json"), True);

// Check if username already exists
if (isset($accounts[$username])) {
	// if it does, pass the error to the client
	$data["success"] = False;
	$data["message"] = "Username is already taken.";
} else { // Username is acceptable, attempt to save to json
	$accounts[$username] = $password;
	$success = file_put_contents("accounts.json", json_encode($accounts), LOCK_EX);
	if ($success === False) {
		$data["success"] = False;
		$data["message"] = "Error saving information, try again.";
	} else {
		$data["username"] = $username;
		$data["success"] = True;
		$data["message"] = "Account created.";
	}
}

// final output
header('Content-Type: application/json');
echo json_encode($data);
?>