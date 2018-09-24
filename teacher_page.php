<?php
session_start();

$conn = new mysqli("localhost", "root", "", "tution");
if($conn->connect_error)die("Database connection failed" . $conn->connect_error);

$signal="";
if(isset($_SESSION["flag2"])){
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
<style>

body {margin:0;}

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





* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}


</style>
<script>
         function check_submit(elm) {
        if(document.mfm.post2.value == ''){
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

    </b>
</div>

<br>

<h1 align="center"> TUTORS PAGE</h1>
<?php
$id = $_SESSION["flag2"];
?>

<form action="insert.php" method="post" enctype="multipart/form-data" name="mfm" style="margin-left: 30px;">
  <h3> POST : <br>
  <textarea name="post2" id="post2" style="height:80px;width:500px"> </textarea>
  <input type="hidden" name="username" value= <?php echo $id ?> >
  <br>
  Class Wanted For Tution: <br><br/>
<input type="checkbox" name="class[]" value="1">1
<input type="checkbox" name="class[]" value="2">2
<input type="checkbox" name="class[]" value="3">3
<input type="checkbox" name="class[]" value="4">4
<input type="checkbox" name="class[]" value="5">5
<input type="checkbox" name="class[]" value="6">6
<input type="checkbox" name="class[]" value="7">7
<input type="checkbox" name="class[]" value="8">8
<input type="checkbox" name="class[]" value="5">9
<input type="checkbox" name="class[]" value="6">10 <br> </br>

  Subject Wanted: <br><br/>
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
}
else{
  header("Location:homepage.php");
}
?>
