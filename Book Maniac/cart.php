<?php
$con= mysqli_connect("localhost", "root", "", "bookmaniac") or die(mysqli_error($con));
$id=$_REQUEST["id"];

$sum = 0;
$query = "SELECT `id`, `name`, `authorName`, `price` FROM `card` WHERE id=$id";
echo "$id";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
if (mysqli_num_rows($result) >= 1) {
                            
      while ($row = mysqli_fetch_array($result)) {
                                   
                                    
                                    
                                    $q="INSERT INTO `addcard`(`id`, `name`, `authorName`, `price`) VALUES ($row[0],'$row[1]','$row[2]','$row[3]');";
                                    mysqli_query($con, $q);
     }                            
}
echo "<script>alert('Added item');window.location='home.php';</script>";                       

?>
