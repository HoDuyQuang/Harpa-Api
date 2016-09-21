<?php
require_once("../wp-config.php");
const SUCCESS_CODE = 100;
const INVALID_PARAMS = 101;
const SQL_ERROR = 102;
die("abc");
/*
$fail = array();
$fail['code'] = INVALID_PARAMS;
if (isset($_POST['email']) && strlen($_POST['email']) > 0) {
            $email = $_POST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $fail['message'] = 'Invalid email format';
                die(json_encode($fail));
            }
        } else {
            $fail['message'] = 'Email is missing';
            die(json_encode($fail));
        }
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $conn->select_db(DB_NAME);
// check email exist        
$query = "SELECT `id`,`email` FROM wp_cvah_emails WHERE `email` ='" . $email . "'";
$result = $conn->query($query);
if (!$result) {
	$fail ['code'] = SQL_ERROR;
        $fail ['message'] = 'SQL Error';
        $fail ['error'] = mysqli_error($conn);
        $conn->close();
        die(json_encode($fail ));
} else {
	if (mysqli_fetch_assoc($result)){
		// Email is already exist
		$conn->close();
		$message['code'] = SUCCESS_CODE;
		$message['message'] = 'Email is already exist';
		die(json_encode($message));
	}
}
// insert email
$query = "INSERT INTO wp_cvah_emails(`email`) VALUES('" .$email . "')";
$result = $conn->query($query);
if ($result) {            
	$conn->close();
	$message['code'] = SUCCESS_CODE;
	$message['message'] = 'Email submitted successfully';
} else {
	$message['code'] = SQL_ERROR;
	$message['message'] = 'SQL Error';
	$message['error'] = mysqli_error($conn);
}
$conn->close();
die(json_encode($message));
*/