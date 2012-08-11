<?php

/** 
 * loginCheck.php file is responsible for managing user login. It controls whether the entered
 * email and/or password are correct or user exists or not.
 * @package: web-app
 * @author: Berker Kovan <kova0058@algonquinlive.com>
 * @copyright: 2012, Berker Kovan
 *
 * @link: http://bkvn.phpfogapp.com/loginCheck.php
 * @version: 0.2
 *
 * @license: This file is licensed under dual permissive BSD-3/MIT licenses. Check License.txt file for
 * further information.
 */

session_start();

$email = $_POST['email'];

$password = $_POST['password'];

$con = mysql_connect('localhost', 'root', '');

if (!$con) {
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