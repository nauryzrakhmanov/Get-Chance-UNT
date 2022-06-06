<?php 
    session_start();
?>
<html lang="en">
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@300;700&display=swap');
        </style>
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=0">
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <div class="content">
                    <div class="header_row">
                        <div class="logo">
                            <img src="https://i.pinimg.com/736x/b0/05/21/b005219bcd3c886986f2389ee4bac474.jpg" style="width:40px; height: 40px;">
                        </div>
                        <div class="header_part2">
                            <nav class="header_nav">
                               <button class="btn1" onclick="window.open('index.php','_self')" class="navigation__link">Home</a></button>
                             <button class="btn2" onclick="window.open('About.php','_self')" class="navigation__link">About Us</button>
                               <button class="btn3" onclick="window.open('Support.php','_self')" class="navigation__link">Support</button>
                            </nav>
                            <div class="header_btns">
                               <a> <button onclick="document.getElementById('id01').style.display='block'">Log In</button></a>
                               <a> <button onclick="window.open('Sign Up.php','_self')" >Register</button></a>
                            </div>
                            <div class="burger">
                                <div class="line1"></div>
                                <div class="line2"></div>
                                <div class="line3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="burger_list">
                        <button class="btn1_1" onclick="window.open('index.php','_self')">Home</button>
                        <li><button class="btn2_2" onclick="window.open('About.php','_self')">About Us</button></li>
                        <li><button class="btn3_3" onclick="window.open('Support.php','_self')">Support</button></li>
                        
                        <li><button onclick="document.getElementById('id01').style.display='block'" class="w3-button">Login</button></li>
                        <li><button onclick="window.open('Sign Up.php','_self')">Register</button></li>
                    </ul>
            </div>
            <div class="main">
                <div class="content">
                    <div class="section2">
                        <div class="section2_row">
                            <div class="sect2_part2">
                                <h2 class="inf__title">Get Chance UNT</h2>
                                <h2 class="inf__title">Welcome to our Service!</h2>
                                <p class="inf__text"> We hope that we will help you to decide on the choice of a higher education institution</p></h2>
                            </div>
                        </div>
                    </div>
                      <div class="section4">
                        <div class="section4_row">
                            <div class="sect4_part1">
                                <h1>After registration, you will have full access to the service<br><br>
                                    Register now!
                                </h1>
                                
                                <a href="Sign Up.php">Register</a>
                                </div>
                                <div class="sect4_part2">
                                    <img src="pictures/signup.png" style="width:600px;height: 600px; border-radius: 20px;">
                                </div>
                        </div>
                    </div>
                    <div class="section3">
                        <h1>The top universities of the country</h1>
                        <div class="section3_row">
                            <div class="sect3_elem">
                                <img src="https://avesta-news.kz/wp-content/uploads/2020/06/9429411733647008_1550.jpg" style="width:500px;height: 380px;">
                                <div class="sect3_txt">
                                    <span><a href="https://nauryzrakhmanov.github.io/lab10/wiki/index.html">1</a></span><br>
                                    <span>Al-Farabi Kazakh National University</span>
                                </div>
                            </div>
                            <div class="sect3_elem">
                                <img src="https://enu.kz/pictures/fotos/fotokorpus.jpg" style="width:500px;height: 380px;">
                                <div class="sect3_txt">
                                    <span><a href="https://nauryzrakhmanov.github.io/pricing-component-with-toggle-master/">2</a></span><br>
                                    <span>L.N.Gumilyov Eurasian National University</span>
                                </div>
                            </div>
                            <div class="sect3_elem">
                                <img src="https://www.kaznaru.edu.kz/img_archive/3458214034_243.jpg" style="width:500px;height: 350px;">
                                <div class="sect3_txt">
                                    <span><a href="https://ayan29173.github.io/Project/faq-accordion-card-main/">3</a></span><br>
                                    <span>Kazakh National Agrarian University</span>
                                </div>
                            </div>
                            <div class="sect3_elem">
                                <img src="https://wikicity.kz/fotos/Company_593_th2Bm52q6oQFcKrRQnLhAX0j.jpeg" style="width:500px;height: 350px;">
                                <div class="sect3_txt">
                                    <span><a href="https://nauryzrakhmanov.github.io/lab10/mid-term/index.html">4</a></span><br>
                                    <span>Kazakh Pedagogical University<br>named Abai</span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section4">
                        <div class="section4_row">
                            <div class="sect4_part1">
                                <h1>About us</h1>
                                <span>
                                   We help applicants to enroll in higher education institutions or simply decide on the choice of university. 
                                </span>
                                <a onclick="window.open('About.php','_self')">About Us</a>
                                </div>
                                <div class="sect4_part2">
                                    <img src="https://images.unsplash.com/photo-1606857521015-7f9fcf423740?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fG9mZmljZXxlbnwwfHwwfHw%3D&w=1000&q=80" style="width:500px;height: 500px; border-radius: 20px;">
                                </div>
                        </div>
                    </div>
                    
            </div>
            <div class="footer">
                <div class="content">
                    <div class="footer_row">
                        <div class="footer_part">
                            <img src="https://i.pinimg.com/736x/b0/05/21/b005219bcd3c886986f2389ee4bac474.jpg" style="width:40px; height: 40px;">
                            <h1></h1>
                            <span>©2022 IITU. All rights reserved</span>
                        </div>
                        <div class="footer_part">
                            <span>Company</span>
                            <span><a href="About.php">About Us</a></span>
                            
                        </div>
                        <div class="footer_part">
                            <span>Support</span>
                            <span><a href="support.php">Contact Us</a></span>
                        </div>
                        <div class="footer_part">
                            <span>Social Network</span>
                            <span><a href="https://www.instagram.com/umurzakov_ayan/" class="fa fa-instagram"> Ayan Umurzakov</a></span><br>
                            <span><a href="https://www.instagram.com/nauryz_rahmanov/" class="fa fa-instagram"> Nauryz Rakhmanov</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="id01" class="w3-modal" style=" border-radius: 10px;">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="min-width:200px; max-width: 900px; border-radius: 10px;">
      <div class="w3-center">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
      </div>
      <form class="" >
        <div class="">
             <div class="containerL">
        <div class="box-1L">
            <div class="content-holderL" style="min-width: 100%  ;">
                <form>
                <h2>Hello!</h2>
                <p>Welcome to our Service!</p> 
                <p>Don't have an account? </p> 
                <button class="button-2L" onclick="window.open('Sign Up.php')" >Sign Up Now</a>
                </form>
            </div>
        </div>
        <div class="box-2L">
            <div class="login-form-containerL">
                <form action="auth.php" method="post">
                <h1>Login Form</h1>
                <input id="login" type="text" name="login" placeholder="login"  class="input-fieldL" >
                <br><br>
                <input id="pass" type="password" name="pass" placeholder="pass" class="input-fieldL">
                <br><br>
                <button type="submit" class="login-buttonL"> Log In </button></a>
         
                </form>
            </div>
    </div>
</div>
</form>
</div>
    
    <script src="JS/script.js"></script>
    </body>
</html>
