<?php
class mysql{
	public function database_connect(){
		$database_server = 'mysql:dbname='.DB_DBNAME.'; host='.DB_HOST.';port='.DB_PORT;
		$options  = array
            (
              PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
              PDO::MYSQL_ATTR_READ_DEFAULT_FILE => '/etc/my.cnf'
            );
		$database_con = new PDO($database_server, DB_USER, DB_PASSWORD, $options);
		return($database_con);
	}function database_insert_point(){
		database_connect();
		//$database_query = "INSERT INTO position ()";
	}function database_read_points(){
		ini_set ("display_errors", "1");

error_reporting(E_ALL);
		$readp = new mysql;
		$readp->database_connect();
		$pdoquery = "SELECT ID, north, east, notice FROM position";
		/*foreach ($readp->query($pdoquery) as $results)
		{
		   echo $results["north"];
		}*/
	}
}