
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            .h{
                text-align: center;
                margin-top: 200px;
            }
            </style>
    </head>
    <body>
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
           <li><a href="setting.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Setting</a></li>
           </ul>
       </div>     
            </nav>
       
        <div class="container-fluid" id="content">
            
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $con= mysqli_connect("localhost", "root", "", "bookmaniac") or die(mysqli_error($con));

                        $query = "SELECT * FROM `addcard` ";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Author</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row[3];
                                    $id = $row[0];
                                    echo "<tr><td>" . "#" . $row[0] . "</td><td>" . $row[1] . "</td><td>Rs " . $row[2] . "</td><td>Rs " . $row[3] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                
                                    }
                                
                                echo "<tr><td></td><td>Total</td><td></td><td>Rs " . $sum . "</td><td></td></tr>";
                                echo "<tr><td colspan=5 ><center><a href='confirmOrder.php?itemsid=" . $id . "' class='btn btn-primary'>Proceed to Buy</a>  <a href='home.php' class='btn btn-primary'>Add items</a></center></tr>"
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<h2 class='h'><a href='home.php'>Add items to the cart first!</a></h2>";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>