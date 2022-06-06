 <?php 
    session_start();
?>
 <!DOCTYPE html>
 <html lang="ru">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="CSS/Sign Up.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


 </head>
 <body>
     


 <div class="container">
        <!--Data or Content-->
        <div class="box-1">
            <div class="content-holder">
                <h2>Hello!</h2>
                <p>Welcome to our Service!</p>  
                <button style="cursor: pointer;" onclick="window.open('index.php','_self')"> Back to home</button>
            </div>
        </div>

        
        <!--Forms-->
        <div class="box-2">
            <div class="login-form-container">
                <div class="login-form-container">
            <form name="reg" onsubmit="return myValidation()" method="post" action="check.php">
                        <h1>Registration Form</h1>
                        <br>
                        <p class="input__text">Your login</p>
                        <input class="input-field" id="login" type="text" name="login" id="login">
                        <br><br>
                        <p class="input__text">Your Name</p>
                        <input class="input-field" id="name" id="name" type="text" name="name">
                        <br><br>
                        <p class="input__text" >Your password</p>
                        <input class="input-field"  minlength="5" id="pass" type="pass" name="pass">
                        <br><br>
                        
                        <button class="login-button" type="submit">Register</button>
        </form>
            </div>
        


        </div>
    </div>
</div>
    <script src="JS/Sign Up.js"></script>
</body>
</html>

