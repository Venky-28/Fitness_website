<?php
session_save_path("sessionfiles");
session_start();
include "connection.php";
if(isset($_POST["submit"]))
{
	$un=$_POST["user"];
	$pwd=md5($_POST["pass"]);
	
	$sel="select *from student where email='$un' and password='$pwd'";
	$res=mysqli_query($conn,$sel);
	$cnt=mysqli_num_rows($res);
	
	if($cnt==0)
	{
		header("location:login.php?er");
	}
	else
	{
		$_SESSION["sname"]=$un;
		header("location:home.php");
	}
}	
?>