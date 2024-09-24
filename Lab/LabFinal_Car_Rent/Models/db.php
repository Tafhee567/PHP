<?php
function getConnection()
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="cardemo";
	$conn=new mysqli($servername,$username,$password,$dbname);
	return $conn;
}
?>