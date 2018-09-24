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
</head>

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


    <h3 align="center" style="font-size:30px;color:black">Student Signup</h3>

    <div class="container">
        <form action="signup_student.php" method="post" align="left" enctype="multipart/form-data">
            First Name : <br/>
            <input type="text" name="firstName" >
            <a id="fn_msg"> </a> <br/>
            Last Name : <br/>
            <input type="text" name="lastName" value="" >
            <a id="ln_msg"> </a><br/>
            Address : <br>
            <input type="text" name="address" value="" >
             <br>

            Date of Birth : <br/>
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
            <br/>


            <br> Phone : <br/>
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
            <br>
            <a id="ps_msg"> </a><br/> Confirm password : <br/>
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
