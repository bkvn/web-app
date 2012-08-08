<?php

session_start();

$email = $_POST['email'];

$password = $_POST['password'];

$con = mysql_connect('localhost', 'root', 'root');

if (!con) {
	die (mysql_error());
}

$db = mysql_select_db('kova0058', $con);

if (!$db) {
	die (mysql_error());
}

$result = mysql_query("SELECT * FROM accounts WHERE email = '$email' AND password = '$password'");

if (!result) {
	die(mysql_error());
}

else {
	session_register("email", $email);
	session_register("password", $password);
	header('location: index.php');
}