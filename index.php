<?php
$con= mysqli_connect('localhost','root');

if(isset($_POST['login']))
{
    mysqli_select_db($con,'hazri');
    $email =$_POST['email'];
    $password=$_POST['password'];
    $query = "SELECT * FROM login where email= '" . $email . "' AND password= '" . $password . "' limit 1;";
    
    $result = mysqli_query($con, $query);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck > 0)
   {
    header('location:homepage.html');
  }
   else {
    echo "incorrect username or password";
  }
    $result= mysqli_query($con,$query);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Hazri</title>
    <style>
      body {
        background-image: url('classphoto.jpg');
        background-size: cover;
        margin: 0;
      }
      .login-form {
        display: flex;
        flex-direction: column;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
      .login-form input[type="email"], .login-form input[type="password"] {
        width: 200px;
        height: 30px;
        margin-bottom: 10px;
        padding: 0 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
      .login-form input[type="submit"] {
        width: 100px;
        height: 35px;
        background-color: blue;
        color: white;
        border: none;
        border-radius: 5px;
      }
      .login-form input[type="submit"]:hover {
        cursor: pointer;
        background-color: #006699;
      }
      .hazri {
        position: absolute;
        top: 10px;
        left: 10px;
        color: blue;
        font-size: 2rem;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <div class="hazri">Hazri</div>
    <form class="login-form"  method="post" name="login">
      <input type="email" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Password">
      <input type="submit" name="login" value="Log in">
    </form>
  </body>
</html>
