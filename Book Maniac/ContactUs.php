<?php
$con= mysqli_connect("localhost", "root", "", "bookmaniac") or die(mysqli_error($con));
if (isset($_SESSION[''])) {
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
            .c{
                font-size: 18px;
                text-align: right;
            }
            .b{
                font-weight: bold;
            }
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
           <li><a href="signin.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
           <li><a href="AboutUs.php"><span class="glyphicon glyphicon-user"></span> About us</a></li> 
       </ul>
       </div>
       </nav>
        <div class="container">
            <div class="row row-responsive">
                <div class="col-lg-6">
                    <h2 class="b" style="font-weight:bold; text-decoration: underline">Contact Us</h2>
                    <br>
                     <form action="contactQuery.php" method="post">
                        <div class="form-group">
                            <label for="name">Your Name:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control"  pattern="/^\w+([\.-]?\w+)*@(\w+([\.-]?\w+)*(\.\w{2,3})$+/">
                        </div>
                        <div class="form-group">
                            <label for="feedback">Feedback:</label>
                            <textarea name="feedback" class="form-control" maxlength="200" min="10"></textarea>
                        </div>
                        <input type="submit" value="Submit" class="btn btn-success" name="submit" onclick="return validation()">
                        <?php
                        if(isset($_REQUEST['error']))
                        {
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        }
                        ?> 
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="content">
                        <h3 style="text-align:right ; text-decoration: underline dotted" class="b">
                            CAMPANY INFORMATION:
                        </h3>
                        <p class="c">
                            <br>
                            7 presidency enclave <br>opp PN marg<br>
                            Rajdhani colony <br>
                            Delhi-3612227 <br>
                            Email: abc@123gmail.com<br>
                            Contact No.7874516683<br>
                            Follow us on : Facebook Twitter Instagram<br>      
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php
 include 'footer.php';
?>
    </body>
</html>