<?php
session_save_path("sessionfiles");
session_start();
include "connection.php";

$sid=$_SESSION["sname"];
$sel="select *from student where email='$sid'";
$res=mysqli_query($conn,$sel);
$r=mysqli_fetch_array($res);

if($sid=="")
{
	header("location:login.php");
}
?>
<h1>Welcome <?php echo ucfirst($r["name"]); ?></h1>

<h2>Change Password</h2>

<form method="post">
Old Password <input type="password" name="opass"> <br><br>
New Password <input type="password" name="npass"> <br><br>
Confirm Password <input type="password" name="cpass"> <br><br>
			<input type="submit" name="change" value="Change"> <br><br>
</form>

<?php
if(isset($_POST["change"]))
{
	$op=md5($_POST["opass"]);
	$np=md5($_POST["npass"]);
	$cp=md5($_POST["cpass"]);
	$dbp=$r["password"];
	$uid=$r["id"];
	
	if($op==$dbp)
	{
		if($np==$cp)
		{
			$upd="update student set password='$np' where id=$uid";
			mysqli_query($conn,$upd);
			echo "<p style=color:blue>Password is Successfully changed</p>";
		}
		else
		{
			echo "<p style=color:red>New and Confirm Password is Mismatched..!</p>";
		}
	}
	else
	{
		echo "<p style=color:red>Old Password is wrong..!</p>";
	}
}
?>

<a href="home.php">Back</a>
<a href="">Edit Profile</a>
<a href="logout.php">Logout</a>