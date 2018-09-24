<?php
    session_start();
    if(isset($_SESSION["flag1"]))
    header("Location:student_page.php");
    else if(isset($_SESSION["flag2"]))
    header("Location:teacher_page.php");
    else if(isset($_SESSION["flag3"]))
    header("Location:admin_page.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title> student registration</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="studentCSS.css">
  <!--<link rel="script" type="text/javascript" href="adminjs.js"/>-->

</head>

<body style="background-color: #8cb6ea;">
<h2 style="text-align: center; font-size: 70px;background-image:url([000132].jpg)"> <a style="text-decoration:none;color:white;" href="homepage.php">TUTION WANTED</a>
  </h2>

    <div class="topnav">
  <b>
    <a href="homepage.php">Home</a>
    <a href="student.php">Request a tutor</a>
    <a href="tutor.php">Browse Subjects</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
    <a href="login.php">Login</a>


    </b>
</div>


    <h3 align="center" style="font-size:30px;color:black">Admin Signup</h3>

    <div class="container">
        <form  method="post" action="admin_signup.php "align="center" name="contact" >
            Name: <br/>
            <input type="text" name="name" ><span id="name"></span><br/>
            Phone:
            <br/>
            <input type="text" name="phone" value="" ><span id="phone"></span>
            <br/>
            Username : <br>
            <input type="text" name="username" value="" ><span id="username"></span>

            <br> Email : <br/>
            <input type="text" name="email" ><span id="email"></span>
              <br> Password : <br/>
            <input type="password" name="password" value="" ><span id="password"></span>
            <br/> Address : <br/>
            <input type="text" name="address" value="" ><span id="address"></span>
            <br/>
            <br/>
              <input type="submit" value="Submit" name="submit">
        </form>
    </div>


</body>
</html>
