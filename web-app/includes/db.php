<?php

/** 
 * db.php file is responsible for creating the user connection to the MySQL database.
 * @package: web-app
 * @author: Berker Kovan <kova0058@algonquinlive.com>
 * @copyright: 2012, Berker Kovan
 *
 * @link: http://bkvn.phpfogapp.com/includes/db.php
 * @version: 0.1
 *
 * @license: This file is licensed under dual permissive BSD-3/MIT licenses. Check License.txt file for
 * further information.
 */

$user = getenv('MYSQL_USERNAME');
$pass = getenv('MYSQL_PASSWORD');
$host = getenv('MYSQL_DB_HOST');
$dbname = getenv('MYSQL_DB_NAME');
$data_source = sprintf('mysql:host=%s;dbname=%s', $host, $dbname);

$db = new PDO($data_source, $user, $pass);

$db->exec('SET NAMES utf8');