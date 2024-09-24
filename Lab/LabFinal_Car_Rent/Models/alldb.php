<?php
	require_once('db.php');
	function adminCheck($id)
	{
		$conn=getConnection();
		$sql="select * from admin where Id='$id'";
		$res=mysqli_query($conn, $sql);
		return $res;
	}
    function customerCheck($id)
	{
		$conn=getConnection();
		$sql="select * from customer where Id='$id'";
		$res=mysqli_query($conn, $sql);
		return $res;
	}
	function insert($name, $offer)
	{
		$conn=getConnection();
		$sql="insert into rent_car values ($cu_name) where Name='$name'";
		$res=mysqli_query($conn, $sql);
	}
	function data()
	{
		$conn=getConnection();
		$sql="select * from rent_car";
		$res=mysqli_query($conn, $sql);
		return $res;
	}
	
	/*function update($name, $id)
	{
		$conn=getConnection();
		$sql="update rent_car set car_name='$name' where car_id='$id'";
		$res=mysqli_query($conn, $sql);
		return $res;
	}*/
	function update($name, $cu_name)
	{
		$conn=getConnection();
		$sql="update rent_car set Cu_name='$cu_name' where car_name='$name'";
		$res=mysqli_query($conn, $sql);
		return $res;
	}
	function delete($cu_name)
	{
		$conn=getConnection();
		$sql="update rent_car set  cu_name = NULL where cu_name='$cu_name'";
		$res=mysqli_query($conn, $sql);
		return $res;
	}
	
    function data1()
	{
		$conn=getConnection();
		$sql="SELECT * FROM rent_car WHERE cu_name IS NOT NULL;";
		$res=mysqli_query($conn, $sql);
		return $res;
	}

?>