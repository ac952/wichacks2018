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
          <li><a href="tutorial.php">BUILD YOUR OWN APP!</a></li>
        </ul>
      </div>
      <!-- <img id="logo" alt="logo1" src=""> -->
    </div>
  </nav>
  <h1 class="heading"> Girls Run the World</h1>
  <!--slideshow source: https://www.w3schools.com/howto/howto_js_slideshow.asp -->
  <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <figure>
        <img alt="pic" src="images/fashionpattern.png" width="950px" height="600px" />
        <a href="game.html" class="button">Link Button</a>
      </figure>
    </div>

    <!-- <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <figure>
        <img alt="pic" src="images/girl1.png" />
      </figure>
    </div> -->

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <figure>
        <img alt="pic" src="images/girl2.png" width="300px" />
        <!-- <button id="button" type="button">Click Me!</button> -->
        <a href="" class="button">Link Button</a>
      </figure>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>

  <button type="button">Click Me!</button>

  <script src="scripts/slideShow.js" type="text/javascript"> </script>

</body>
</html>
