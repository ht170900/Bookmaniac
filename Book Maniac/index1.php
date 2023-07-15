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
                <div class="col-md-4 col-sm-6 " >
                    <div class="thumbnail">
                    <a href="#" >
                        <img src="img3/1.jpg" alt="book" width="100" >
                    </a>                                  
                    <center>                                      
                    <div class="caption">
                        <h4>
                            The Amber Room
                        </h4>
                        <h5>
                            Written by:Steave Berry
                        </h5>
                        <small>
                        <p>
                           The book is set around the mystery behind the Amber Room's disappearance at the end of World War II 
                           (a treasure stolen by Nazis in 1941 from the Catherine Palace in Tsarskoe Selo, Russia, 
                           it subsequently disappeared in 1945,
                           amidst the chaos at the end of the war).<br>
                        </p>
                        <p>
                            price:400
                        </p>
                        </small>
                    </div>
                    
                    
                    </center>
                </div>
        
                </div>
                 <div class= "col-md-4 col-sm-6" >
                    <div class="thumbnail">
                    <a href="#" >
                        <img src="img3/2.jpg" alt="book" width="100" >
                    </a>
                    
                   
                    <center>
                    
                    
                    <div class="caption">
                        <h4>
                            The Fault In our Star
                        </h4>
                        <h5>
                            Written by:John Green
                        </h5>
                        <small>
                        <p>
                            The Fault in Our Stars is a novel which tells the story of Hazel Grace Lancaster, 
                            a 16 year old girl who has had cancer for three years, and Augustus 'Gus' Waters, a 17 year 
                            old boy who's now in remission, and once had a tumour in his leg.
                            The two fall hopelessly in love, even though they know their story will only end in heartbreak<br>
                        </p>

                        <p>
                            price:250
                        </p>
                        </small>
                    </div>
                    
                  
                    </center>
                </div>
                    
                 </div>
                 <div class= "col-md-4 col-sm-6" >
                    <div class="thumbnail">
                    <a href="#" >
                        <img src="img3/3.jpg" alt="book" width="100" >
                    </a>
                    
                   
                    <center>
                    
                    
                    <div class="caption">
                        <h4>
                          DA Vinci Code  
                        </h4>
                        <h5>
                            Written by:Dan Brown.
                        </h5>
                        <small>
                        <p>
                            A murder in Paris' Louvre Museum and cryptic clues in some of Leonardo da Vinci's most famous
                            paintings lead to the discovery of a religious mystery. For 2,000 years a secret society closely 
                            guards information that -- 
                            should it come to light -- 
                            could rock the very foundations of Christianity.<br>
                        </p>
                        <p>
                            price:675
                        </p>
                        </small>
                    </div>
                    
                    
                    </center>
                        
                    </div>
                 </div>
                     
            </div>
            </div>
      
        
        
        <div class="container-fluid">
            <div class="row">
                <div class= "col-md-4 col-sm-6" >
                    <div class="thumbnail">
                    <a href="#" >
                        <img src="img3/4.jpg" alt="book" width="100" >
                    </a>
                    
                   
                    <center>
                    
                    
                    <div class="caption">
                        <h4>
                          Harry Potter and Philosopher's Stone
                        </h4>
                        <h5>
                            Written by:J.K. Rowling
                        </h5>
                        <small>
                        <p>
                            A boy who learns on his eleventh birthday that he is the orphaned 
                            son of two powerful wizards and possesses unique magical powers of his own.
                            He is summoned from his life as an unwanted child to become a student at Hogwarts, 
                            an English boarding school for wizards. There, he meets several friends who become his
                            closest allies and help him discover the truth about his parents' mysterious deaths. <br>
                        </p>

                        <p>
                            price:755
                        </p>
                        </small>
                    </div>
                    
                    
                    </center>
                </div>
                </div>
        
         <div class= "col-md-4 col-sm-6" >
                    <div class="thumbnail">
                    <a href="#" >
                        <img src="img3/52.jpg" alt="book" width="100" >
                    </a>                                   
                    <center>                                      
                    <div class="caption">
                        <h4>
                           Why I Am A Hindu
                        </h4>
                        <h5>
                            Written by:Shashi Tharoor
                    </h5>
                        <small>
                        <p>
                            With that being said “Why I am a Hindu” recounts some historical events and personal 
                            dogma that shaped the author’s understanding of Hinduism.
                            Actually, we believe this book is an excellent addition not just for Hindus, but for all others who want
                            to explore the depths of this enigmatic belief system.
                            To explore the virtues, aspects, and dispute points in Hinduism.
                            To share grave concerns regarding the vicious forms of Hinduism that rose to the surface in the 1980s. 
                            <br>
                        </p>
                        <p>
                            price:699
                        </p
                        </small>
                    </div>
                    
                    
                    </center>
                </div>
         </div>
                    <div class= "col-md-4 col-sm-6" > 
                    <div class="thumbnail">
                    <a href="#" >
                        <img src="img3/6.jpg" alt="book" width="100" >
                    </a>
                    
                   
                    <center>
                    
                    
                    <div class="caption">
                        <h4>
                            One Hundred Years of Solitude
                        </h4>
                        <h5>
                            Written by:Gabriel García Márquez
                        </h5>
                     
                        
                        <p>
                            This is the author's epic tale of seven generations of the Buendía
                            family that also spans a hundred years of turbulent Latin American history, from the postcolonial 1820s to the 1920s. 
                            Patriarch José Arcadio Buendía builds the utopian city of Macondo 
                            in the middle of a swamp.
                            By the end of the novel Melquíades has been revealed as the narrator; his mysterious manuscripts are in fact the text of the novel.
                            <br>
                        </p>
                        <p>
                            price:295
                        </p>
                        
                    </div>
                        
                    
                    
                    </center>
                    </div>
                    </div>
                        
                      
            </div>
            </div>
          <div class="container-fluid">
            <div class="row">
                <div class= "col-md-4 col-sm-6" >
                    <div class="thumbnail">
                    <a href="#" >
                        <img src="img3/7.jpg" alt="book" width="100" >
                    </a>
                    
                   
                    <center>
                    
                    
                    <div class="caption">
                        <h4>
                            Adventures of Unknown
                        </h4>
                        <h5>Written by:Frank Belknap Long 
                        </h5>
                       
                        <p>
                            The first ongoing horror comics anthology, Adventures into the Unknown is finally collected into 
                            a series of deluxe hardcovers! The pre-Code delights found in this debut volume include inventive,
                            exciting tales like "The Living Ghost," "Kill, Puppets, Kill," "The Affair of Room 1313," and the ongoing "True Ghosts of History" feature -
                            with contributions from Golden Age greats Fred Guardineer, 
                            Al Feldstein, Leonard Starr, Edvard Moritz, and others! <br>
                        </p>

                        <p>
                            price:100
                        </p
                        
                    </div>
                    
                    
                    </center>
                </div>
                </div>
        
         <div class= "col-md-4 col-sm-6" >
                    <div class="thumbnail">
                    <a href="#" >
                        <img src="img3/8.jpg" alt="book" width="100" >
                    </a>
                    
                   
                    <center>
                    
                    
                    <div class="caption">
                        <h4>
                        Thirteen Reason Why?
                        </h4>
                        <h5>
                            Written by:Jay Asher
                        </h5>
                        
                        <p>
                            Thirteen reasons why is a moving story of Hannah Baker who commits suicide at 
                            a very young age and records the thirteen reasons why she committed suicide on an audio tape. 
                            This audio tape comes to Clay Jensen, Hannah’s classmate and her secret crush. And the reasons that 
                            Hannah narrates in the audio tape changes Clay’s life forever. He listens to those thirteen reasons to
                            unravel that he was a part of the cause as well<br>                   
                        </p>
                        <p>
                            price:322
                        </p>
                        
                    </div>
                    </center>
                </div>
         </div>
                    <div class= "col-md-4 col-sm-6" > 
                    <div class="thumbnail">
                    <a href="#" >
                        <img src="img3/9.jpg" alt="book" width="100" >
                    </a>
                    
                   
                    <center>
                    
                    
                    <div class="caption">
                        <h4>
                            Meridian
                        </h4>
                        <h5>Written by:Alice Walker</h5>
                        
                        <p>
                           Set in the American South in the 1960s it follows Meridian Hill, a courageous young
                           woman who dedicates herself heart and soul to her civil rights work, touching the lives of those around her even as her 
                           own health begins to deteriorate. Hers is a lonely battle, but it is one she will not abandon, whatever the costs.
                           Truman falls to the floor in a swoon. Upon awakening, he concludes that he must take up the internal struggle of which
                           Meridian has finally freed herself.<br>
                        </p>
                        <p>
                            price:699
                        </p>
                        
                    </div>
                    
                    
                    </center>
                    </div>
                    </div>
                        
                      
            </div>
              </div>
<?php
 include 'footer2.php';
?>
    </body>
</html>
