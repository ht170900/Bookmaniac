<?php
$con= mysqli_connect("localhost", "root", "", "bookmaniac") or die(mysqli_error($con));
if (isset($_SESSION['User_ID'])) {
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
                        
             <a class="navbar-brand" href="home.php">
                BOOK MANIAC
             </a> 
             
                 <img src="img3/logo4.jpg" alt="Logo" style="width:100px; height: 45px"> 
             
         </div>   
       <ul class="nav navbar-nav navbar-right">
           <li><a href="home.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
           <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Log out</a></li>
           <li><a href="addCart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
           <li><a href="setting.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Setting</a></li>
           </ul>
       </div>     
            </nav>
            <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>Change Password</h2>
                        <form method="get" action="set.php">
                            <div class="form-group">
                             
                                <input type="email" class="form-control"  placeholder="Email" name="email" pattern="/^\w+([\.-]?\w+)*@(\w+([\.-]?\w+)*(\.\w{2,3})$+/" required = "true">
                            </div> 
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="old password"  name="password" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="new password" name="new" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="retype new password" name="again" required>
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
