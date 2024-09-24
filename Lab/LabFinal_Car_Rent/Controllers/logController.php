<?php
    session_start();
	require_once('../Models/alldb.php');
    if (isset($_GET['admin']))
	{
		header('location:../Views/adminLog.php');
	}
    if (isset($_GET['customer']))
	{
		header('location:../Views/customerLog.php');
	}
    if (isset($_GET['customerLogin']))
	{
		$id=$_GET['id'];
		$name=$_GET['name'];
		$pass=$_GET['pass'];
		if (empty($id||$name||$pass))
		{
			$_SESSION['error']="Please fill the form!";
			header('location: ../Views/customerLog.php');
		}
		else
		{
			if (is_numeric($id))
			{
				if (mysqli_num_rows(customerCheck($id))==1)
				{
					$_SESSION['name']=$name;
					header('location: ../Views/customerHome.php');
				}
				else
				{
					$_SESSION['error']="Invalid login!";
					header('location: ../Views/customerLog.php');
				}
			}
			else
			{
				$_SESSION['error']="Id must be numeric!";
				header('location: ../Views/customerLog.php');
			}
		}
	}
    if (isset($_GET['adminLogin']))
	{
		$id=$_GET['id'];
		$name=$_GET['name'];
		$pass=$_GET['pass'];
		if (empty($id) || empty($name) || empty($pass))
		{
			$_SESSION['error']="Please fill the form!";
			header('location: ../Views/adminLog.php');
		}
		else
		{
			if (is_numeric($id))
			{
				if (mysqli_num_rows(adminCheck($id))==1)
				{
					$_SESSION['name']=$name;
					header('location: ../Views/adminHome.php');
				}
				else
				{
					$_SESSION['error']="Incorrect login!";
					header('location: ../Views/adminLog.php');
				}
			}
			else
			{
				$_SESSION['error']="Id must be numeric!";
				header('location: ../Views/adminLog.php');
			}
		}
	}
    if (isset($_GET['delete']))
	{
		$cu_name=$_GET['delete'];
        $cu_name=delete($cu_name);
        $_SESSION['message']="Deleted successfully";
        header('location:../Views/adminHome.php');
	}
    if (isset($_GET['rent']))
	{
		$name=$_GET['rent'];
        $cu_name=$_GET['cu_name'][$name];
        update($name, $cu_name);
        $_SESSION['rent']="successfully rent the car!";
        header('location:../Views/customerHome.php');
	}
	/*if (isset($_GET['rent']))
	{
		$name=$_GET['rent'];
        $car_name=$_GET['car_name'][$name];
        update($name, $car_name);
        $_SESSION['request']="successfully rent the car!";
        header('location:../Views/customerHome.php');
	}*/
    if (isset($_GET['logout']))
	{
		unset($_SESSION['name']);
		header('location:../index.php');
	}
?>