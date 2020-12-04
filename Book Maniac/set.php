<?php
$con= mysqli_connect("localhost", "root", "", "bookmaniac") or die(mysqli_error($con));
$email=$_GET['email'];
$password=$_GET['password'];
$new=$_GET['new'];
$again=$_GET['again'];
$q= "SELECT email, password FROM signin WHERE Email ='$email';";
$result = mysqli_query($con, $q)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$tablepassword = $row['password'];
if($new!=$again)
{
  header('location: setting.php?error=new password and retypes password don\'t match');
}
else {
    if ($password == $tablepassword) {
        $q = "UPDATE  signin SET Password = '" . $new . "' WHERE Email = '" . $email . "'";
        mysqli_query($con, $q) or die($mysqli_error($con));
        header('location:setting.php?error=Password Updated');
    } else
    {
      header('location:setting.php?error=Wrong Old Password');
    }
        
}
?>
