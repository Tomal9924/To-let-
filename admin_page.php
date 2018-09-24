<?php
session_start();

$conn = new mysqli("localhost", "root", "", "tution");
if ($conn->connect_error) {
    die("Database connection failed" . $conn->connect_error);
}

$signal = "";
if (isset($_SESSION["flag3"])) {
    ?>




<!DOCTYPE html>
<html>
<head>
  <title></title>


</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="adminPageCSS.css">




<body style="background-color: #8cb6ea;">

  <h2 style="text-align: center; font-size: 70px;background-image:url([000132].jpg)"> <a style="text-decoration:none;color:white;" href="homepage.php">TUTION WANTED</a>
  </h2>
  <?php
  $id = $_SESSION["flag3"];
  ?>
    <div class="topnav">
  <b>

      <ul>
          <li><a style="text-decoration:none;color:white;" href="logout.php">Logout</a></li>
          <li><a style="text-decoration:none;color:white;" href="admin_profile.php">Profile</a></li>
          <li><a style="text-decoration:none;color:white;" href="">Search</a>
              <ul>
                  <li><a style="text-decoration:none;color:white;" href="studentSearch.php">Student Search</a></li
                      <li><a style="text-decoration:none;color:white;" href="studentSearch.php">Teacher Search</a></li>

              </ul>

          </li>
          <li><a style="text-decoration:none;color:white;" href="admin_profile.php">Delete</a></li>

      </ul>


    </b>
</div>
<br>

</body>
</html>
<?php
} else {
    header("Location:homepage.php");
}
?>
