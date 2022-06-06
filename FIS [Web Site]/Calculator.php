<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/Calculator.css">
  <title>Document</title>
  <style>
    }
.header__container{
    min-width: 100%;
    height: 50px;
    background-color: ;
    padding-top: 20px;
}
.header__container:last-child{
  padding-right: 0px;
}
.sticky {
    position: fixed;
  background-color: #81bddb;
  transition: 3s;
}


.header__navigation{


}
.header__navbar{

}
.navigation__items{
  list-style-type: none;
  display: flex;
  justify-content: flex-end;
}
.navigation-item{
  margin-right: 50px;
}
.navigation__link{
  color: white;
  text-decoration: none;
  font-size: 20px;
}
  </style>
</head>
<body>
      <div class="header">
      <div class="header__container" id="myHeader">
        <div class="header__navbar" >
          <nav class="header__navigation">
            <ul class="navigation__items">
              <li class="navigation-item"><a href="main.php" class="navigation__link">Back to home</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
  <header class="header">
    <h1 id="title" class="text-center">Fill in the fields below correctly to get an accurate result</h1>
  </header>
  <div class="div_subj" style="padding-left: 50px;">
  <h3 class="subj_h3"> Biology and Geography - 1</h3>
  <h3> Mathematics and Physics - 2</h3>
  <h3> Foreign language and World History - 3</h3>
  <h3>Chemistry and Physics - 4</h3>
 <h3> Mathematics and Chemistry - 5</h3>
 <h3> Geography and Foreign language - 6</h3>
  </div>
  <form id="survey-form" action="calc.php" method="POST">
    <div class="form-group">
      <label for="subjects" > Write your subjects</label>
      <input type="text" class="form-control"  name="subj" placeholder="1">  
    </div>
     <div class="form-group">
      <label id="name-label" for="name">Enter your points</label>
      <input type="number" name="point" id="name" class="form-control" placeholder="130" required />
    </div>
    <div class="form-group">
      <button type="submit" id="submit" name="submit" class="submit-button">
        Submit
      </button>
    </div>
    <div>
      <p class="msg">
        
      </p>
    </div>
  </form>
  
</div>

</body>
</html>