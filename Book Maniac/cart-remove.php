<?php

$con= mysqli_connect("localhost", "root", "", "bookmaniac") or die(mysqli_error($con));
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET["id"]; 
    // Delete the rows from user_items table where item_id and user_id equal to the item_id and user_id we got from the cart page and session
    $query = "DELETE FROM `addcart` WHERE AC_ID=$item_id";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    header("location:addCart.php");
}
?>