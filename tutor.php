<?php
    session_start();
    if(isset($_SESSION["flag1"]))
    header("Location:student_page.php");
    else if(isset($_SESSION["flag2"]))
    header("Location:teacher_page.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title> student registration</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>

body {margin:0;}
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.topnav {
  overflow: hidden;
  background-color: #333;

}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 16px;
  text-decoration: none;
  font-size: 16px;
  width:160px;

}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}


  .button {
  border-radius: 4px;
  background-color: #5f2160;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 13px;
  width: 199px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}


.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}


.container {
    border-radius: 5px;
    background-color: inherit;
    padding: 20px;
  font-size: 20px;
  color: white;
}

input[type=button] {
    background-color: white;
    color: #5f2160;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
     font-size: 25px;
}

input[type=button]:hover {
    background-color: #d2a7f2;
}


input[type=password]{
    width: 20%;
    padding: 11px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 5px;
    margin-bottom: 8px;
    resize: vertical;
}






/*  ///////////////////////      box column   ///////////////////////////////// */

* {
    box-sizing: border-box;
}

.col-container {
    display: table;
    width: 100%;
  font-weight: bold;
  padding:auto;
}
.col {
    display: table-cell;
    padding: 15px;
  font-weight: bold;
  width: 60%;
}
@media only screen and (max-width: 600px) {
    .col {
        display: block;
         width: 100%;
    }
}
.img{
  height: 300px;
  weight : 300px;
}

/* /////////////////////////////  contact form //////////////////////////// */

input[type=text]{
    width: 20%;
    padding: 11px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 5px;
    margin-bottom: 8px;
    resize: vertical;
}
textarea{
    width: 19.5%;
    padding: 11px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 5px;
    margin-bottom: 8px;
    resize: vertical;
}
select{
    width: 6.5%;
    padding: 11px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 5px;
    margin-bottom: 8px;
    resize: vertical;
}

input[type=submit] {
    background-color: #d6d8c7;
    color: black;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #a7b7a8;
}

.container {
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>

<body style="background-color: #8cb6ea;">
<h2 style="text-align: center; font-size: 40px;"> <a style="text-decoration:none;color:white;" href="homepage.php">TUTION WANTED</a>
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


    <h3 align="center" style="font-size:30px;color:black">Tutor Signup</h3>

    <div class="container">
        <form action="signup_tutor.php" method="post" align="left" enctype="multipart/form-data">
            First Name : <br/>
            <input type="text" name="firstName" >
            <a id="fn_msg"> </a> <br/> Last Name : <br/>
            <input type="text" name="lastName" value="" >
            <a id="ln_msg"> </a><br/> Date of Birth : <br/>
            <select name="day">
        <?php
for ($i=0; $i<=31; $i++){

  if($i == 0){

    echo "<option value='day'>Day</option>";

  }

  else{

    echo "<option value=$i>$i</option>";

  }

}

?>
      </select>
            <select name="month">
        <?php
for ($i=0; $i<13; $i++){

  if($i == 0){

    echo "<option value='month'>Month</option>";

  }

  else{

    echo "<option value=$i>$i</option>";

  }

}

?>
      </select>

            <select name="year">
        <?php
for ($i=1970; $i<=2017; $i++){

  if($i == 1970){

    echo "<option value='year'>Year</option>";

  }

  else{

    echo "<option value=$i>$i</option>";

  }

}

?>
      </select><br/> Gender : <br><br>
            <input type="radio" name="gender" value="male" selected>Male
            <input type="radio" name="gender" value="female">Female
            </br>
            <br> Qualification : <br/>
            <textarea type="text" name="qualification" placeholder="qualification...." > </textarea>

            <br/><br> Phone : <br/>
            <input type="text" name="phone" placeholder="Phone.." >

            <a id="phn_msg"> </a><br/> Email : <br/>
            <input type="text" name="email" placeholder="Email.." >
            <a id="eml_msg"> </a><br/> Username:
            <br/>
            <input type="text" name="uname" id="unm" value="" >
            <a id="uname_msg"> </a><br/> Password : <br/>
            <input type="password" name="password" value="" >
            <a id="ps_msg"> </a><br/> Confirm password : <br/>
            <input type="password" name="confirmPassword" value="" >
            <a id="cnps_msg"> </a><br/>
            <br><a id="ps_msg"> </a><br/> Browse Photo : <br/>

            <input type="file" name="fileToUpload" value="" >
            <a id="cnps_msg"> </a><br/>
            <br>
            <br>
            <input type="submit" value="Submit" name="btn"> <br/>
        </form>
    </div>


</body>
</html>
