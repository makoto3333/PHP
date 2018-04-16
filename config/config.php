<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/03/23
 * Time: 16:04
 */

ini_set('display_errors', 1);

define('DSN', 'mysql:dbhost=localhost;dbname=dotinstall_sns_php');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'mu4u');

define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST']);

require_once(__DIR__ . '/../lib/functions.php');
require_once(__DIR__ . '/autoload.php');

session_start();