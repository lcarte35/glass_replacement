<?php
	
class Dbh {
	private $host = "localhost";
	private $user = "root";
	private $pwd = "";
	private $dbName = "wiserv";
	
	protected function connect() {
		$dsn ='mysql:host=' . $this->host . ';dbname=' . $this->dbName;
	}
}


?>
