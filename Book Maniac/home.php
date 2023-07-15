<?php
$con= mysqli_connect("localhost", "root", "", "bookmaniac") or die(mysqli_error($con));
if (isset($_SESSION['User_ID'])) {
    header('location: index.php');
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
            #bgg{
    background-image: url(img3/bg.jpg);
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
           <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Log out</a></li>
           <li><a href="addCart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
           <li><a href="setting.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Setting</a></li>
          
           
       </ul>
       </div>
       </nav>
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
                <div class="col-md-4 col-sm-6 ">
                    <form action="cart.php?id=<?php echo $row[0]?>" method="post">
                    <div class="thumbnail">
                    <a href="#" >
                        <img src="<?php echo $row[4]?>" alt="book" width="100" >
                    </a>                                  
                    <center>                                      
                    <div class="caption">
                        <div class="bname">
                        <h4 >
                        <?php echo $row[1]?>
                        </h4>
                        </div>
                        <h5>
                            Written by: <?php echo $row[2]?>
                        </h5>
                        <small>
                        <p>
                        <?php echo $row[5]?><br>
                        </p>
                        <p name="price">
                            Price: <?php echo $row[3]?>
                        </p>
                        </small>
                    </div>
                        <input type="button" class="btn btn-primary btn-block" value="Buy Now" onclick="window.location.href='http://localhost/Bookmaniac-main/Book%20Maniac/confirmOrder.php'"/>
                        
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </center>
                </div>
                </form>
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
