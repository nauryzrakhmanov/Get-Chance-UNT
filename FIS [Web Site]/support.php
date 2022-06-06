<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="CSS/support.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Support</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<div class="wrapper">
<section class="block_1">
	<header>
		
		<div class="header">
			<div class="header__container" id="myHeader">
				<div class="header__navbar" >
					<nav class="header__navigation">
						<ul class="navigation__items">
							<li class="navigation-item"><a href="index.php" class="navigation__link">Back to home</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
		<div class="questions__wrapper">
		<div class="questions">
			<h1 class="questios__title"> Top 5 questions </h1>
  	<div class="questios__item">
		<h2 class="extremum-click">Where can I see the list of universities?</h2>
		<div class="extremum-slide"> <p class="answer">To get started, you need to go through a simple registration and log in with your data to the site, then go to the "Universities" tab. 
		</p>
	</div>
  	</div>
  	<hr class="line">
  	<div class="questios__item">
		<h2 class="extremum-click">To see the universities I can enroll in, what do I need to do?</h2>
		<div class="extremum-slide">
			<p class="answer">To do this, you will need to register in our service and go through the "Calculator" tab</p>
		</div>
  	</div>
  	
  	<hr class="line">
  	<div class="questios__item">
		<h2 class="extremum-click">Can I not register and find out which universities I can enroll in?</h2>
		<div class="extremum-slide"> <p class="answer">Registration is required on our service before getting access to the full functionality</p>
		</div>
  	</div>
  	<hr class="line">
  	<div class="questios__item">
		<h2 class="extremum-click">What else can you do for us?</h2>
		<div class="extremum-slide">
			<p class="answer">
				We can also advise you on admission to higher education institutions or offer you exam preparation.
			</p>
		</div>
  	</div>
  	<hr class="line">
  	<div class="questios__item">
		<h2 class="extremum-click">I can't find the answer to my question, what should I do?</h2>
		<div class="extremum-slide"><p class="answer">If you have a question that you can't find an answer to, feel free to contact us. Below you can send us an email using our feedback form!</p>
		</div>
  	</div>
  	<hr class="line">
  	</div>
  </div>
</section>
<main>
	
  		<div class="main">
			<div class="main__container">
				<div class="main__inf">
					<h1 class="main__title">Service Support</h1>
						  <form name="myForm" action="mailto:naurahbur@gmail.com" onsubmit="return validateForm()" method="post" enctype="text/plain">
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
	</main>
	<footer>
		<br>
	
	</footer>


	<script src="JS/support.js"></script>
</body>
</html>
