<?php
class mysql{
	function database_connect(){
		$database_server = 'mysql:dbname='.DB_DBNAME.'; host='.DB_HOST.';port='.DB_PORT;
		$options  = array
            (
              PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
              PDO::MYSQL_ATTR_READ_DEFAULT_FILE => '/etc/my.cnf'
            );
		$database_con = new PDO($database_server, DB_USER, DB_PASSWORD, $options);
	}function database_
}