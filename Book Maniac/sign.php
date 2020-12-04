<?php
$x=mysqli_connect("localhost", "root","","bookmaniac");
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Contact=$_POST['Contact'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[789][0-9]{9}$/";


$query = "SELECT * FROM signin WHERE Email='$Email'";
  $result = mysqli_query($x, $query);
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m1 = "<span class='red'>Email Already Exists</span>";
    header('location: signin.php?m1=' . $m1);
  } else if (!preg_match($regex_email, $Email)) {
    $m2 = "<span class='red'>Not a valid Email Id</span>";
    header('location: signin.php?m1=' . $m2);
  } 
  else if (!preg_match($regex_num, $Contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signin.php?m2=' . $m);
  }
   else {
$q="INSERT INTO signin(Name, Email, Password, Contact) VALUES ('$Name','$Email','$Password','$Contact')";

$g3= mysqli_query($x,$q);
if($g3)
{
header('Location:home.php');
} 
  }
?>
