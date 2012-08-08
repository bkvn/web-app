<?php

require_once 'includes/db.php';

$con = mysql_connect('localhost', 'root', 'root');

if (!con) {
	die (mysql_error());
}

$db = mysql_select_db('kova0058', $con);

if (!$db) {
	die (mysql_error());
}

$email = $_POST['username'];
$password = $_POST['password'];

if (empty($email)) {

	die ("Please enter your email!<br>");
}

if (empty($password)) {

	die ("Please enter your password!<br>");
}

$user_check = mysql_query("SELECT email FROM accounts WHERE email = '$email'");

$do_user_check = mysql_num_rows($user_check);

if ($do_user_check > 0) {

	die ("Username is already in use!<br>");
}
else {

$insert = mysql_query("INSERT INTO accounts (email, password) VALUES ('$email', '$password')");


if(!$insert){

	die (mysql_error());
}

header('location: index.php');

}
