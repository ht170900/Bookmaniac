
<?php
$con= mysqli_connect("localhost", "root", "", "bookmaniac") or die(mysqli_error($con));
if(isset($_REQUEST['submit']))
{
    $name=$_REQUEST['name'];
    $address=$_REQUEST['address'];
    $city=$_REQUEST['city'];
    $state=$_REQUEST['state'];
    $pincode=$_REQUEST['pincode'];
    $contact=$_REQUEST['contact'];
   // $payment=$_REQUEST['payment'];
    $q2="Select *from addcard;";
   $result= mysqli_query($con, $q2);
   while ($row = mysqli_fetch_array($result))
   {    
       $q3="INSERT INTO `orderdetails`(`id`, `bname`, `authorName`, `price`,`Name`, `address`, `city`, `state`, `pincode`, `contact`) VALUES ($row[0],'$row[1]','$row[2]','$row[3]','$name','$address','$city','$state',$pincode,$contact);";
       mysqli_query($con, $q3);
   }
    mysqli_query($con, $q);
     $q1="truncate table addcard;";
    mysqli_query($con, $q1);
    header('location:sucess.php');           
}
if(isset($_REQUEST['cancel']))
{
    header('location:home.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>bookstore</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/boostrap.min.js"></script>
        <link href="css/css.css" rel="stylesheet">
         <style>
             #bgg
            {
               background-image: linear-gradient(to right,lightblue, lightgreen);
            }
        </style>
    </head>
    <body id="bgg" >
      <nav class="navbar navbar-inverse">
         <div class="container-fluid">                           
         <div class="navbar-header">
                        
             <a class="navbar-brand" href="index.php">
                BOOK MANIAC
             </a> 
             
                 <img src="img3/logo4.jpg" alt="Logo" style="width:100px; height: 45px"> 
             
         </div>   
       <ul class="nav navbar-nav navbar-right">
           <li><a href="home.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
           <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Log out</a></li>
           <li><a href="AboutUs.php"><span class="glyphicon glyphicon-user"></span> About us</a></li>
           <li><a href="ContactUs.php"><span class="glyphicon glyphicon-phone"></span> Contact us</a></li>
            
       </ul>
       </div>
       </nav>
         <div class="container-fluid decor_bg" id="content" >
            <div class="row">
                <div class="container">
                    <div class="col-sm-6  col-md-6 ">
                        <br>
                        <br>
                      
                        <img src="img3/signbook.jpg" alt="book" width="80%; height:50px">
                    </div>
                    <div class="col-sm-6 col-md-6 ">
                        <h2 style="font-weight:bold; text-decoration: underline">Order</h2><br>
                        <form  action="confirmOrder.php" method="get">
                            
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name" required = "true" >          

                            </div>
                            <div class="form-group">
                             
                                <textarea type="text" name="address" class="form-control" placeholder="Address" required="true" min='20' max='50'></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="City" name="city" required="true">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="State" name="state" required="true">
                            </div>
                            
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Pincode" name="pincode"  pattern="[0-9]{6}" maxlength="6" size="6" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required="true">  
                                 <div class="form-group">
                                     <h5 style="color:red">*PAYMENT MODE: CASH ON DELIVERY
</h5>
                                        
   
                            </div>
                                <center>
                                <input type="submit" name="submit" value='Proceed To Order' class="btn btn-success" style="align:cneter"><span>
                                    <input type="submit" value='Cancel' name="cancel" class="btn btn-success" style="align:cneter"></span><br><br>
                                </center>
                                
                        </form>
                         
                    </div>
                            
                </div>
            </div>
            
        </div>
            
        <?php
 include 'footer.php';
?>
        
    </body>
</html>
