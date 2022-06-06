<?php 
    session_start();
?>
<html>
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@300;700&display=swap');
        </style>
        <link rel="stylesheet" href="CSS/main.css">
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
                             <button class="btn2" onclick="window.open('Calculator.php','_self')" class="navigation__link">Calculator UNT</button>
                               <button class="btn3" onclick="window.open('University.php','_self')" class="navigation__link">Universities</button>
                            </nav>
                    
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
                        <li><button class="btn2_2" onclick="window.open('Calculator.php','_self')">Calculator UNT</button></li>
                        <li><button class="btn3_3" onclick="window.open('University.php','_self')">Universities</button></li>
                     
                    </ul>
            </div>
            <div class="main">
                <div class="content">
                    <div class="section2">
                        <div class="section2_row">
                            <div class="sect2_part2">
                                <h2 class="inf__title">Get Chance UNT</h2>
                                <h2 class="inf__title">Welcome to our Service!</h2>
                                <p class="inf__text"></p></h2>
                            </div>
                        </div>
                    </div>
                      <div class="section4">
                        <div class="section4_row">
                            <div class="sect4_part1">
                                <h1>Are you interested in our work and do you have a suggestion for us?
                                </h1>
                                
                                <a onclick="window.open('https://wa.me/+77783510221')">Send the message now</a>
                                </div>
                                <div class="sect4_part2">
                                   <form name="myForm" action="mailto:naurahbur@gmail.com" onsubmit="return validateForm()" method="post" enctype="text/plain">
                            <h2 class="main__title">Email Form</h2>
                            <div class="wrapper-input">
                                <div class="main__input">
                                    
                                    <input class="wrapper__input" type="text" name="name" placeholder="Name">
                                </div>
                                <div class="main__input">
                                
                                    <input class="wrapper__input" type="text" name="email" placeholder="Email">
                                </div>
                                <div class="main__input">
                                <textarea minlength="20" class="wrapper__input" name="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="main-btn">
                            <input class="main__button" type="submit" value="Send Your Message"></input>
                            
                            </div>
                        </form>
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
    
    <script src="JS/main.js"></script>
    </body>
</html>
