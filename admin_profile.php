<?php
session_start();


$signal = "";
if (isset($_SESSION["flag3"])) {
  $id = $_SESSION["flag3"];

$conn = new mysqli("localhost", "root", "", "tution");
if ($conn->connect_error) {
    die("Database connection failed" . $conn->connect_error);
}



?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="student_profileCSS.css">

<body style="background-color: #8cb6ea;">

  <h2 style="text-align: center; font-size: 70px;background-image:url([000132].jpg)"> <a style="text-decoration:none;color:white;" href="homepage.php">TUTION WANTED</a></h2>

<h2 align="center">ADMIN PROFILE</h2>

<div class="topnav">
<a href="logout.php">Logout</a>
<a href="admin_page.php">Back</a>

</div>
<pre class="output">
<?php
$sql="Select Name,Phone,Email,Address from  admin where Username='".$_SESSION['flag3']."'";

echo "<h3>Hello:".$_SESSION['flag3']."</h3>";

$result=mysqli_query($conn,$sql) or die(mysqli_error());
$arr=array();
//print_r($result);
while($row = mysqli_fetch_assoc($result))
{


    $arr[]=$row;


}
foreach($arr as $v)
{
//print_r($v);

echo  "<h3>"."<br>Name: ".$v["Name"]."</h3>"."<h3>"."<br>Phone: ".$v["Phone"]."</h3>"."<h3>"."<br>Email:".$v["Email"]."</h3>"."<h3>"."<br>Address:".$v["Address"]."</h3>";

}



?>


</pre>


</body>
</html>

<?php
} else {
    header("Location:homepage.php");
}
?>
