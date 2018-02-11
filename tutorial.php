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
          <li><a href="index.php">HOME</a></li>
          <li><a class = "active" href="tutorial.php">BUILD YOUR OWN APP!</a></li>
        </ul>
      </div>
      <!-- <img id="logo" alt="logo1" src=""> -->
    </div>
  </nav>
	<div id="editable">
		I want a
		<select id="mySelect" onChange="myColor()">
            <option value="red" style="color:#FF0000;  background:#d9d4d1;">red</option>
		     <option value="blue" style="color:blue; background:#d9d4d1;">blue</option>
		     <option value="yellow" style="color:yellow; background:#d9d4d1;">yellow</option>
             <option value="green" style="color:green; background:#d9d4d1;">green</option>
             <option value="black" style="color:black; background:#d9d4d1;">black</option>
        </select> circle！
	</div>
	<p id="demo"></p>

    <p>ctx.fill()</p>
    <p>Color it!</p>
	<div id="canvas" class="colorDemo">
        <canvas id="myCanvas" width="480" height="320"></canvas>
        <script src="colorTutorial.js">
        </script>

	</div>
</body>
</html>
