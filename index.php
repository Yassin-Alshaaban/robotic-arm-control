<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet"type="text/css"href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<center>

<form action="final.php" method="post">

<h1>motors control panel</h1>
<b>motor1</b>
<div class="slidecontainer">
  <input type="range" min="1" max="180" value="90" class="slider" id="myRange" name="motor1" required>
  <span id="demo"></span>
</div>

<br>
<b>motor2</b>
<div class="slidecontainer">
  <input type="range" min="1" max="180" value="90" class="slider"  id="myRange2" name="motor2" required>
  <span id="demo2"></span>
</div>

<br>
<b>motor3</b>
<div class="slidecontainer">
  <input type="range" min="1" max="180" value="90" class="slider" id="myRange3" name="motor3" required>
  <span id="demo3"></span>
  </div>

<br>
<b>motor4</b>
<div class="slidecontainer">
  <input type="range" min="1" max="180" value="90" class="slider" id="myRange4" name="motor4" required>
  <span id="demo4"></span>
  </div>

<br>
<b>motor5</b>
<div class="slidecontainer">
  <input type="range" min="1" max="180" value="90" class="slider" id="myRange5" name="motor5" required>
  <span id="demo5"></span>
  </div>
    
<br>
<b>motor6</b>
<div class="slidecontainer">
   <input type="range" min="1" max="180" value="90" class="slider" id="myRange6" name="motor6" required>
   <span id="demo6"></span>
   </div>

<br><br>

<button type="submit" value="Submit">  Save </button>
 &nbsp; 
 <form name="formArm" method="post" action="final.php">
 <button type="submit" value="run"> Run </button>
</form>

</form>
</body>
<script src="Action.js"></script>
</html>