<?php
$con= mysqli_connect("localhost", "root", "", "bookmaniac") or die(mysqli_error($con));

if (isset($_SESSION['Email'])) {
    header('location: home.php');
}
?>
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
    <body id="bgg">
        <nav class="navbar navbar-inverse">
         <div class="container-fluid">                           
         <div class="navbar-header">
                        
             <a class="navbar-brand" href="index.php">
                BOOK MANIAC
             </a> 
             
                 <img src="img3/logo4.jpg" alt="Logo" style="width:100px; height: 45px"> 
             
         </div>   
       <ul class="nav navbar-nav navbar-right">
           <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
           <li><a href="signin.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
           <li><a href="AboutUs.php"><span class="glyphicon glyphicon-user"></span> About us</a></li>
           <li><a href="ContactUs.php"><span class="glyphicon glyphicon-phone"></span> Contact us</a></li>
           
       </ul>
       </div>            
       </nav>
         <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-info" >
                            <div class="panel-heading" style="background-color:lightskyblue" >
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body" >
                                <p class="text-warning"><b>Login to make a purchase</b><p><br>
                                <form method="post" action="log.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="Password" required>
                                    </div>
                                    <button type="login" name="login" class="btn btn-success" >Login</button>   
                                        <?php  
                                        if(isset($_REQUEST['error']))
                        {
                        echo "<b class='red'>" . $_GET['error'] . "</b>";
                        }?>
                               
                                </form>
                            </div>
                            <div class="panel-footer" style="background-color:lightgray"><p>Don't have an account? <a href="forgot.php" style="color:black ;font-weight:bold">Register</a></p></div>
                       <div class="panel-footer" style="background-color: lightgrey">
                           <a href="forgot.php" style="color:black ;font-weight:bold">
                               Forgot password?
                           </a>
                       </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <?php
 include 'footer.php';
?>
    </body>
</html>
