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

<h2>Edit Profile</h2>

<form method="post" action="home.php">
Name <input type="text" name="nuser" value="<?php echo $r["name"] ?>"> <br><br>
Email <input type="text" name="nemail" value="<?php echo $r["email"] ?>"> <br><br>
Phone <input type="text" name="nphone" value="<?php echo $r["phone"] ?>"> <br><br>
<input type="submit" name="update" value="Update"> <br><br>
<input type="file" name="pic">
</form>

<a href="home.php">Back</a>
<a href="logout.php">Logout</a>