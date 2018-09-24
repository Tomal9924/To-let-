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
  <title></title>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="homeCSS.css">
<body style="background-color: #8cb6ea;">

  <h2 style="text-align: center; font-size: 70px;background-image:url([000132].jpg)"> <a style="text-decoration:none;color:white;" href="homepage.php">TUTION WANTED</a>
  </h2>
    <div class="topnav">
  <b>
    <ul>
      <li><a href="homepage.php">Home</a></li>
      <li><a href="#">Signup</a>

          <ul>
            <li><a href="admin.php">Admin Signup</a>
              <li><a href="student.php">Student Signup</a>
                <li><a href="tutor.php">Teacher Signup</a>
          </ul>

      </li>
      <li><a href="tutor.php">Browse Subjects</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="login.php">Login</a></li>

</ul>
    </b>
</div>

<br>


<div class="col-container">
<div class="col">

  <?php
  $jsn = json_decode(fetchNotice1());
  ?>

</div>
</div>

<?php
  function fetchNotice1(){
    $conn = new mysqli("localhost", "root", "", "tution");
    if($conn->connect_error)die("Database connection failed" . $conn->connect_error);

      foreach($conn->query('SELECT * from student_post') as $row){
          foreach($conn->query('SELECT * from student') as $row2){
         if($row['user'] == $row2['username']){
            echo "<div style='margin-left:40px;'>";
            echo "<div style='margin-left:20px;'> <img class='picture' src='".$row2['fileToUpload']."'>";
            echo "&nbsp;".$row2['firstname']."&nbsp;".$row2['lastname']."</div><br>";
            echo "<div style='margin-left:20px;'> Post: ".$row['post']."</div><br>";
            echo "<div style='margin-left:20px;'> Class: ".$row['class']."</div><br>";
            echo "<div style='margin-left:20px;'> Subject: ".$row['subject']."</div><br>";
            echo "<div style='margin-left:20px;'> Address: ".$row2['address']."</div><br>";
            echo "<div style='margin-left:20px;'> date: ".$row['datecreation']."</div><br>";

            echo "</div>";
         }
         echo "<br>";
      }
    }
}?>




</body>
</html>
