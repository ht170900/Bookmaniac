<?php
$con= mysqli_connect("localhost", "root", "", "bookmaniac") or die(mysqli_error($con));
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
 .wrapper{
    max-width: 100%;
    background-image: linear-gradient(to right,lightpink, lightgreen);
    height: 30px;
    vertical-align: middle;
    color:white;
}

.anime {
    background: navy;
    white-space: nowrap;
    -webkit-animation: rightThenLeft 4s linear;
}
#bgg{
    background-image: url(img3/bg.jpg);
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
           <li><a href="signin.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
           <li><a href="AboutUs.php"><span class="glyphicon glyphicon-user"></span> About us</a></li>
           <li><a href="ContactUs.php"><span class="glyphicon glyphicon-phone"></span> Contact us</a></li>
            
       </ul>
       </div>
       </nav>
        <div class="wrapper">
<marquee behavior="alternate"><span class="anime">For more books Sign Up/Log in</span></marquee>
</div><br>

        <div class="container-fluid">
            <div class="row">
            <?php
                        $con= mysqli_connect("localhost", "root", "", "bookmaniac") or die(mysqli_error($con));
                        $query = "SELECT * FROM `book` ";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <?php
                                while ($row = mysqli_fetch_array($result)) {

                                ?>
                <div class="col-md-4 col-sm-6 " >
                    <div class="thumbnail">
                    
                    <a href="#" >
                        <img src=<?php echo $row[4] ?> alt="book" width="100" >
                    </a>                                  
                    <center>                                      
                    <div class="caption">
                        <h4>
                        <?php echo $row[1] ?>
                        </h4>
                        <h5>
                            Written by:<?php echo $row[2] ?>
                        </h5>
                        <small>
                        <p>
                        <?php echo $row[5] ?><br>
                        </p>
                        <p>
                            price:<?php echo $row[3] ?>
                        </p>
                        </small>
                    </div>
                    </center>
                </div>
                </div> 
                <?php 
           } 

        }
                                ?>
                 </div>
            </div>
        
        
   
<?php
 include 'footer2.php';
?>
    </body>
</html>