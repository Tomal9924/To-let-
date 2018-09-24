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
    <title></title>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

<style>

body {margin:0;}

.topnav {
  overflow: hidden;
  margin-left:60px;
  margin-right:20px;
  margin-top:20px;
}

.topnav a {
  float: left;
  display: block;
  color:white;
  background-color:black;
  text-align: center;
  padding: 20px 16px;
  text-decoration: none;
  font-size: 18px;
  width:205px;
  border:1px solid  rgb(255,102,0);

/*
background-color:rgb(153,153,153);
width:170px;
float: left;
border:1px solid  rgb(255,102,0);
color:rgb(255,255,255);
line-height:50px;
text-align:center;
font-size:18px;
border-radius:10px;
list-style:none;
display:block;*/
}

.topnav a:hover {
  background-color: #BC8F8F;
  color: black;
}

* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
h2{
color:#fff;
margin-top: auto;

}

.col-container {
    display: table;
    width: 90%;
  font-weight: bold;
  padding:6px;
}
.col {
    display: table-cell;
    padding: 0px;
  font-weight: bold;
  width: 60%;
}



</style>

<body style="background-color: #8cb6ea;">

    <h2 style="text-align: center; font-size: 70px;background-image:url([000132].jpg)"> <a style="text-decoration:none;color:white;" href="homepage.php">TUTION WANTED</a>
    </h2>

        <div class="topnav">
    <b>
        <a href="homepage.php">Home</a>
        <a href="student.php">Student</a>
        <a href="tutor.php">Tutor</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <a href="login.php">Login</a>

    </b>
</div>

<form action="check_login.php" method="post" style="text-align: center;">
            <h1 style="padding:50px; ">LOGIN</h1>
            <br>&nbsp;&nbsp;
            <b>CATEGORY:</b> &nbsp;&nbsp;&nbsp;
            <select name="option" id="option" style="width: 200px;  padding:5px;">
               <option value=""> Category </option>
               <option value="student"  > Student </option>
               <option value="teacher"  > Teacher </option>
               <option value="admin" > Admin </option>
            </select>

            <br><br>
            <b style="padding:20px;" > USER ID &nbsp;&nbsp;&nbsp;&nbsp;</b>
            <input type="text"  name="username" placeholder="User Id ..." style="width: 200px;  padding:5px;">
            <br> <br>
            <b style="padding:20px;"> PASSWORD </b>
            <input type="password"  name="password" placeholder="Password..." style="width: 200px; padding:5px;">
            <br>
            <br>
            &nbsp;&nbsp;
            <input type="submit"   value="LOGIN" style="margin-left:40px;padding:5px;background-color:maroon;color:white;">
            <a href="homepage.php"> cancel</a>
</form>




</body>
</html>
