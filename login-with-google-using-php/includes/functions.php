<?php
class Users {
	public $tableName = 'users';
	
	function __construct(){
		//database configuration
		$dbServer = 'localhost'; //Define database server host
		$dbUsername = 'root'; //Define database username
		$dbPassword = ''; //Define database password
		$dbName = 'testdatabase'; //Define database name
		
		//connect databse
		$con = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
		$con->query("SET names utf8");

		if(mysqli_connect_errno())die("Failed to connect with MySQL: ".mysqli_connect_error());
		else $this->connect = $con;
	}
	
	function checkUser($oauth_provider,$oauth_uid,$fname,$lname,$emailAddr,$gender,$locale,$link,$picture)
	{
		date_default_timezone_set('Asia/Bangkok');

		$prevQuery = mysqli_query($this->connect,"SELECT * FROM $this->tableName WHERE emailAddr = '".$emailAddr."'") or die(mysqli_error($this->connect));
		if(mysqli_num_rows($prevQuery) > 0) 
			     $update = mysqli_query($this->connect,"UPDATE $this->tableName SET accountType = '"."Google"."', fname = '".$fname."', lname = '".$lname."', emailAddr = '".$emailAddr."', password = '', gender = '".$gender."', locale = '".$locale."', picture = '".$picture."', link = '".$link."', modified = '".date("Y-m-d H:i:s",time())."' WHERE emailAddr = '".$emailAddr."'") or die(mysqli_error($this->connect));
		else 
			$insert = mysqli_query($this->connect,"INSERT INTO $this->tableName SET accountType = '"."Google"."', fname = '".$fname."', lname = '".$lname."', emailAddr = '".$emailAddr."', password = '', gender = '".$gender."', locale = '".$locale."', picture = '".$picture."', link = '".$link."', created = '".date("Y-m-d H:i:s",time())."', modified = '".date("Y-m-d H:i:s",time())."'") or die(mysqli_error($this->connect));
		
		$query = mysqli_query($this->connect,"SELECT * FROM $this->tableName WHERE emailAddr = '".$emailAddr."'") or die(mysqli_error($this->connect));
		$result = mysqli_fetch_array($query);
		return $result;
	}
}
?>