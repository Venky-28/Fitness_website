<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEFIT</title>
    <link href="images/logo.png" rel="icon"> 
    <link href="css/mystyle1.css" rel="stylesheet">
    <link href="css/mystyle1.1.css" rel="stylesheet">
    <script type="text/javascript" src="script1.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


<!-- header section starts      -->

<nav>
    <div class="logo"><span>BE</span>FIT</div>
    <ul class="mainMenu">
        <li><a onclick="window.location.href='frontpage.html'">Home</a></li>
        <li><a onclick="window.location.href='about.html'">About</a></li>
        <li><a onclick="window.location.href='product.html'">Product</a></li>
        <li><a onclick="window.location.href='Gallery.html'">Gallery</a></li>
        <li><a onclick="window.location.href='contact.html'">Contact</a></li> 
        <li><button onclick="window.location.replace('home.php')">Account</button></li> <br>
    </ul>
</nav>

<div class="heading">
<div class="box">Level up your fitness journey with <font>BE</font>FIT</div>
</div>



    <!-- header section end      -->


<?php
    session_save_path("sessionfiles");
    session_start();
    include "connection.php";
    
    $sid=$_SESSION["sname"];
    $sel="select *from student where email='$sid'";
    $res=mysqli_query($conn,$sel);
    $r=mysqli_fetch_array($res);
    
    //update
    if(isset($_POST["update"]))
    {
        $nun=$_POST["nuser"];
        $nem=$_POST["nemail"];
        $nph=$_POST["nphone"];
        $uid=$r["id"];
        
        $upd="update student set name='$nun', email='$nem', phone=$nph where id=$uid";
        $q=mysqli_query($conn,$upd);
        $_SESSION["sname"]=$nem;
        header("location:home.php");
    }
    
    if($sid=="")
    {
        header("location:login.php");
    }
    ?>
   

 
   <div class="box1">

   <h1>Hi <?php echo ucfirst($r["name"]); ?>!</h1>

   <div class="pic">
   <?php
        if($r["dp"]=="")
        {
            echo "<img src='uploads/default.png' width='150' height='150'>";
        }
        else
        {
            echo "<img src='uploads/$r[dp]' width='150' height='150'>";
        }
        ?>
   </div>

   <div class="edit">
    <a href="edit_profile.php"><button>Edit Profile</button></a> &nbsp&nbsp&nbsp
    <a href="change_pass.php"><button>Password Reset</button></a>&nbsp&nbsp&nbsp
    <a href="logout.php"><button>Logout</button></a>    
   </div>
  
   
   <div class="box2">
   <div class="name">
    <h5>Full Name</h5> <br>
    <div class="spell"><?php echo $r["name"]; ?></div>
    <div class="line"></div>
    </div>
<br>
<br>
    <div class="name1">
    <h5>Phone Number</h5> <br>
    <div class="spell1"><?php echo $r["phone"]; ?></div>
    <div class="line"></div>
    </div>
   </div>

<div class="box3">
<div class="name2">
    <h5>Email</h5> <br>
    <div class="spell2"><?php echo $r["email"]; ?></div>
    <div class="line"></div>
    </div>
<br>
<br>
    <div class="name3">
    <h5>Gender</h5> <br>
    <div class="spell3"><?php echo $r["gender"]; ?></div>
    <div class="line"></div>
    </div>
</div>

</body>
</html>
