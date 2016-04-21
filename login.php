<?php
// get username and password
$username = $_POST["usernameLogin"];
$password = $_POST["passwordLogin"];

// create our data object
$data = array();

// decode the accounts file to associative array
$accounts = json_decode(file_get_contents("accounts.json"), True);

// if the username doesn't exist, throw an error
if (!isset($accounts[$username])) {
	$data["success"] = False;
	$data["message"] = "Incorrect username or password.";
// if the password doesn't match, throw an error
} elseif (!($password == $accounts[$username])) {
	$data["success"] = False;
	$data["message"] = "Incorrect username or password.";
// otherwise they both match
} else {
	$data["username"] = $username;
	$data["success"] = True;
	$data["message"] = "Login successful.";
	}

// final output
header('Content-Type: application/json');
echo json_encode($data);
?>