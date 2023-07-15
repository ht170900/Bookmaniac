<?php
$con= mysqli_connect("localhost", "root", "", "bookmaniac") or die(mysqli_error($con));

if (isset($_SESSION['User_ID'])) {
    header('location: home.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
          <?php
          session_start();
	$q=session_destroy();
	$e=session_unset();
if($q || $e)
{	
header('Location:index.php');
}
          ?>
    </body>
</html>
