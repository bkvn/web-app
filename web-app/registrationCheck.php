<?php

/**
 * registrationCheck.php file is responsible for registering user accounts. It controls whether the entered email
 * and/or password valid and saves user accounts into the database.
 * @package: web-app
 * @author: Berker Kovan <kova0058@algonquinlive.com>
 * @copyright: 2012, Berker Kovan
 * 
 * @link: http://bkvn.phpfogapp.com/registrationCheck.php
 * @version: 0.2
 *
 * @license: This file is licensed under dual permissive BSD-3/MIT licenses. Check License.txt file for
 * further information.
 */

require_once 'includes/db.php';

$con = mysql_connect('localhost', 'root', '');

if (!$con) {
	die (mysql_error());
}

$db = mysql_select_db('kova0058', $con);

if (!$db) {
	die (mysql_error());
}

$email = $_POST['email'];
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
