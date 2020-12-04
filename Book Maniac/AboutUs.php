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
            .checked {
                color: orange;
        }
        .b{
            font-weight: bold;
        }
        .s{
            font-size: 15px;
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
           <li><a href="ContactUs.php"><span class="glyphicon glyphicon-phone"></span> Contact us</a></li>
            
       </ul>
       </div>
       </nav>
        <div class="container">
            <div class="row row-responsive">
                <div class="col-lg-4">
                    <h1 class="b">About Us</h1>
                    <div class="content">
                        <img src="img3/bookimg2.jpg" class="img-responsive" alt="img" style="height:100px ;alignment-adjust:center">
                        <center><br>
                            <br><p>
                            Since its fuse in 2005, Company Name has cut a specialty for itself in the youngsters’ 
                            books section of the distributing business. We have some expertise in books implied for
                            offspring of various ages. The wide scope of books offered by us incorporates fantasies,
                            moral stories, showed story books, reference books, general learning books, sentence 
                            structure books, shading books, action books, sticker books and some more. 
                            Every one of these books are accessible in both English and Hindi.
                        </p></center>
                        <br> <h4 class="b">Genres of book:</h4></strong>
                    <ul class="s">
                        <li>Novel</li>
                        <li>literary Fiction</li>
                        <li>Poetry</li>
                        <li>Essay</li>
                    </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h1 class="b">Ratings:</h1>
                    <div class="s">
                        <h3 class="b">Google:</h3>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star ">  4.0/5.0 245 reviews</span>
                    </div>
                    <div class="s">
                        <h3 class="b">Just Dial:</h3>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star ">  4.0/5.0 200 reviews</span>
                    </div>
                    <div class="s">
                        <h3 class="b">Sulekha:</h3>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star ">  3.0/5.0 500 reviews</span>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <h1 class="b">Our Publishers:</h1>
                    <ul class="s">
                        <li>Jaico Publishing House</li>
                        <li>Rupa Publications</li>
                        <li>Roli Books</li>
                        <li>Scholastic India</li>
                        <li>Fingerprint Publishing</li>
                        <li>Arihant Publication</li>
                        <li>Aakash Publication</li>
                        <li>Atul Prakashan</li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
 include 'footer.php';
?>
    </body>
</html>
