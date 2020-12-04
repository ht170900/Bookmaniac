<?php
$con= mysqli_connect("localhost", "root", "", "bookmaniac") or die(mysqli_error($con));
$email=$_POST['email'];
$new1=$_POST['new'];
$again1=$_POST['again'];
$q= "SELECT Email FROM signin WHERE Email ='$email';";
$result = mysqli_query($con, $q)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$emailt= $row['Email'];
if($new1!=$again1)
{
  header('location: forgot.php?error=new password and retyped password don\'t match');
}
else {
    if ($email == $emailt) {
        $q = "UPDATE  signin SET Password = '" . $new1 . "' WHERE Email = '" . $email . "'";
        mysqli_query($con, $q) or die($mysqli_error($con));
        header('location:login.php?error=Password Updated');
    } else
    {
      header('location:forgot.php?error=Wrong email');
    }
        
}
?>
