<?php
$con= mysqli_connect("localhost", "root", "", "bookmaniac") or die(mysqli_error($con));
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .h{
                text-align: center;
                margin-top: 200px;
            }
            .hh{
                text-align: center;
                
            }
            </style>
    </head>
    <body>
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
           <li><a href="setting.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Setting</a></li>
          
            
       </ul>
       </div>
       </nav>
        
        <h2 class="h">
            THANK YOU FOR ORDERING OUR BOOK!!!!
        </h2>
        <h4 class="hh" >
            FOR BUYING MORE BOOKS <a href="home.php">CLICK!!!</a>
        </h4>
<?php
 include 'footer.php';
?>
    </body>
</html>
