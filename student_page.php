<?php
session_start();

$conn = new mysqli("localhost", "root", "", "tution");
if ($conn->connect_error) {
    die("Database connection failed" . $conn->connect_error);
}

$signal = "";
if (isset($_SESSION["flag1"])) {
  echo '<script type="text/javascript">';
  echo 'alert("Logged In");';
  //echo 'window.location.href = "homepage.php";';
  echo '</script>';
    ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="student_pageCSS.css">


     <script>
         function check_submit(elm) {
        if(document.mfm.post.value == ''){
            alert("Please fill the textarea");
        }
    else{
            if (elm.getAttribute("type") == "button") {
                document.mfm.submit();
              alert('Post Done');
            } else {
                alert("Error occurs!");
            }
            }
    }
    </script>

<body style="background-color: #8cb6ea;">

  <h2 style="text-align: center; font-size: 70px;background-image:url([000132].jpg)"> <a style="text-decoration:none;color:white;" href="homepage.php">TUTION WANTED</a>
  </h2>

    <div class="topnav">
  <b>
      <a href="logout.php">Logout</a>
      <a href="student_profile.php">Profile</a>

    </b>
</div>
<br>
<h2 align="center"> STUDENT PAGE</h2>

<?php
$id = $_SESSION["flag1"];
?>

<form action="insert.php" method="post" enctype="multipart/form-data" name="mfm" style="margin-left: 30px;">
  <h3> POST : <br>
  <textarea name="post" id="post" style="height:80px;width:500px"> </textarea>
  <input type="hidden" name="username" value= <?php echo $id ?> >
  <br>

    <a id=""> </a><br/> class :
    <select name="class">
              <?php
          for ($i=1; $i<=10; $i++){

            if($i == 0){
              echo "<option value='class'> class </option>";
            }
            else{
              echo "<option value=$i> Class $i</option>";
             }
           }
          ?>
   </select>
   <br> </br>

   Subject Needed: <br><br/>
<input type="checkbox" name="subject[]" value="Bangla">Bangla
<input type="checkbox" name="subject[]" value="English">English
<input type="checkbox" name="subject[]" value="Mathematics">Mathematics
<input type="checkbox" name="subject[]" value="Science">Science
<input type="checkbox" name="subject[]" value="Physics">Physics
<input type="checkbox" name="subject[]" value="Chemistry">Chemistry
<input type="checkbox" name="subject[]" value="Biology">Biology
<input type="checkbox" name="subject[]" value="Computer">Computer <br>

<br><br/>
<input type="button" onclick="check_submit(this);" value="Submit" >
</form>


</body>
</html>

<?php
} else {
    header("Location:homepage.php");
}
?>
