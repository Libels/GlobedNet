<?php
/**
 * GlobedNet
 *
 * File Configuration ini berisi konstanta untuk:
 * * MySQL
 * * PATH
 */

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'Passw0rd!');

if (!defined('PATH')) {
	define('PATH', dirname(__FILE__));
}