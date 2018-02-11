<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" type="text/css" href="css/all.css" media="all" />
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"> </script>
  <title>WicHacks</title>
</head>
<body>
  <nav class="topbar">
    <div>
      <div>
        <ul>
          <li><a class = "active" href="index.php">HOME</a></li>
          <li><a href="tutorial.html">BUILD YOUR OWN APP!</a></li>
        </ul>
      </div>
      <img id="logo" alt="logo1" src="images/logo.png">
      <img id="sign" alt="sign" src="images/sign.png">
    </div>
  </nav>
  <!-- <h1 class="heading"> Girls Run the World</h1> -->
  <div class="slideshow-container">
    <div class="mySlides fade">
      <!-- <div class="numbertext">1 / 2</div> -->
      <figure>
        <!-- <img alt="pic" src="images/fashionpattern.png" width="950px" height="600px" /> -->
        <div class="container">
          <img class="imgA1" alt="pic" src="images/slide1.png" width="100%" />
          <p class="imgB1">Five In A Row</p>
          <a class="button1" href="game.html">PLAY</a>
        </div>
      </figure>
    </div>
    <div class="mySlides fade">
      <!-- <div class="numbertext">2 / 2</div> -->
      <figure>
        <div class="container">
          <img class="imgA1" alt="pic" src="images/code.png" width="100%" />
          <p class="imgUX">Be a UX/UI Designer!</p>
          <a class="button2" href="design.html">START HERE</a>
        </div>
      </figure>
    </div>
<div class="mySlides fade">
      <!-- <div class="username">2 / 2</div> -->
      <figure>
        <div class="container">
          <img class="imgA1" alt="pic" src="images/code.png" width="100%" />
          <p class="imgUX">How to Code in JavaScript</p>
          <a class="button3" href="circle.html">JavaScript Tutorial</a>
        </div>
      </figure>
    </div>
    
    
    
    
    
    
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>

  <script src="scripts/slideShow.js" type="text/javascript"> </script>

</body>
</html>
