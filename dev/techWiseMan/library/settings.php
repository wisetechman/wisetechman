<?php
/* Define the root url where the script will be found such as http://website.com or http://website.com/Folder/ */
DEFINE ( 'WEBSITE_URL', 'http://localhost/dummy' );

/* Default time zone ,to be able to send mail */
date_default_timezone_set ( 'UTC' );

/* database connection parameters */
include 'CrudClass.php';

/**
 * new crud object and connection tio the db **
 */
function connectDb() {
	$crud = new crud ();
	
	/**
	 * * The DSN **
	 */
	
	$crud->dsn = "mysql:dbname=wisetechman;host=localhost";
	
	/**
	 * * MySQL username and password **
	 */
	
	$crud->username = 'root';
	$crud->password = '';
	
	return $crud;
}
?>