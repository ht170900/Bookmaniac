<?php
$x=mysqli_connect("localhost", "root","","bookmaniac");
session_start();
$Email=$_REQUEST['Email'];
$Password=$_REQUEST['Password'];
$q=mysqli_query($x,"SELECT * FROM signin where Email='$Email' AND Password='$Password'");
$n=mysqli_num_rows($q);
if($n==1)
{
$_SESSION['Email']=$Email;
echo '<script>alert("You are logged in")</script>';
header('Location:home.php');
}
 else {
     $error = "<span style='color:red'>** Email id or Password is incorrect.Please try again!</span>";
    header('location: login.php?error=' . $error);   
    }
?>
