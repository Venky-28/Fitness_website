<?php
include "connection.php";
if(isset($_POST["submit"]))
{
	$un=$_POST["user"];
	$em=$_POST["email"];
	$ph=$_POST["phone"];
	$pwd=md5($_POST["pass"]);
	$gen=$_POST["gender"];

	
	$fname=$_FILES["pic"]["name"];
	$ftmp=$_FILES["pic"]["tmp_name"];
	$fsize=$_FILES["pic"]["size"];
	$ftype=$_FILES["pic"]["type"];
	
	if($ftype=="image/jpg" || $ftype=="image/jpeg" || $ftype=="image/png" || $ftype=="")
	{
		$fkb=$fsize/1024;
		if($fkb>=10 || $fkb=="")
		{
			move_uploaded_file($ftmp,"uploads/$fname");
			$ins="insert into student(name, email, phone, password, gender, dp) values ('$un','$em',$ph,'$pwd', '$gen', '$fname')";
			$res=mysqli_query($conn,$ins);
			if($res==true)
			{
				header("location:index.html");
			}
			else
			{
				header("location:index.php");
			}
		}
		else
		{
			echo "File size too small";
		}
	}
	else
	{
		echo "Invalid File Type";
	}
}
?>