<?php
	function openConnection(){
		$host="localhost";
		$user="root";
		$pw="12345";
		$db="supplychain";

		$con = new mysqli($host, $user, $pw,$db) or die("Connect failed: %s\n". $conn -> error);
		return $con; 
	}

	function closeConnection($con){
		$con -> close();
	}
?>