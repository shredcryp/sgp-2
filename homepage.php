<?php
$con= mysqli_connect('localhost','root');



?>

<!DOCTYPE html>
<html>
<head>
  <title>My Website</title>
</head>
<style>
    .body {
        margin:0;
        padding: 0;
    }
    .container {
  display: flex;
}

.left-image, .right-image {
  width: 50%;
}

.left-image {
  order: 1;
}

.right-image {
  order: 2;
}




</style>
<body>
    
  <nav>
     <nav>
    <a href="/"> Hazri</a>
    <!-- <a href="/about">About</a>
    <a href="/contact">Contact</a> -->
  </nav>
  </nav>
  <div class="container">
    <div class="left-image">
        <div class="left-image">
            <img src="image 15.png" alt="Left image">
          </div>
    </div>
    <div class="right-image">
        <div class="right-image">
            <img src="pexels-pavel-danilyuk-8423018 1.png" alt="Right image">
          </div>
    </div>
  </div>
  <form action="index.php" method="post">
    Value1: <input type="text" name = "field1" /><br/>
    Value2: <input type="text" name = "field2" /><br/>
    <input type="submit" />
</form>
  
 
    
</body>
</html>
