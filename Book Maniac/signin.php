<?php
$con= mysqli_connect("localhost", "root", "", "bookmaniac") or die(mysqli_error($con));
if (isset($_SESSION['Email'])) {
    header('location: home.php');
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
            .red{
                color:red;
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
           <li><a href="signin.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
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
                        <h2 style="font-weight:bold; text-decoration: underline">SIGN UP</h2><br>
                        <form  action="sign.php" method="post">
                            
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="Name" required = "true" >          

                            </div>
                            <div class="form-group">
                             
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="Email" required = "true">
                                <?php
                                if(isset($_REQUEST['m1'])){
                                    echo $_GET['m1'];                               
                                }
                                ?>

                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="Password" required="true"  pattern=".{8,}">
                                
                            </div>
                            <div class="form-group">                               
                               <input type="text" class="form-control"  placeholder="Contact" name="Contact" required="true"><br>
                               <?php
                                if(isset($_REQUEST['m'])){
                                    echo $_GET['m'];                               
                                }
                                ?><br>
                               <input type="submit" name="SignUp" class="btn btn-success" style="align:cneter"><br><br>
                                <h4>Already have a Account? <a href="login.php">LOGIN</a></h4>
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
