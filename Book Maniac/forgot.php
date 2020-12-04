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
           <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
           <li><a href="login.php"><span class="glyphicon glyphicon-user"></span>Log in</a></li>
           <li><a href="signin.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
         
           </ul>
       </div>     
            </nav>
            <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>Forgot Password</h2>
                        <form method="post" action="forgotphp.php">
                            <div class="form-group">
                             
                                <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                            </div> 
                            
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="New password" name="new" pattern=".{8,}" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="Retype new password"  pattern=".{8,}" name="again" required>
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                               <?php
                                 if(isset($_REQUEST['error'])){
                                 echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";}
                        ?> 

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
