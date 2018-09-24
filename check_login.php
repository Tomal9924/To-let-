
<?php
session_start();
$u=$_POST['username'];
$p=$_POST['password'];
$i=$_POST['option'];

if($_POST['option'] == "student"){
  require("mysql-to-json.php");
  $jsonData= getJSONFromDB("select * from student");
  $flag=0;
  $jsn=json_decode($jsonData);
  for($i=0;$i<sizeof($jsn);$i++)
  {
		if($_POST['username'] == trim($jsn[$i]->username) && $_POST['password'] == trim($jsn[$i]->password))
    {
			$_SESSION["flag1"]=$u;
			//$_SESSION["id"]= $u;
			$flag1=1;
		}
}
if($flag1==1){
  echo '<script type="text/javascript">';
  echo 'alert("Logged In");';
  //echo 'window.location.href = "homepage.php";';
  echo '</script>';

	header("Location:student_page.php");
}

else{
    ?> <script>alert('wrong username or password');</script>"; <?php
	header("Location:homepage.php");

}
}

if($_POST['option'] == "teacher"){
  require("mysql-to-json.php");
  $jsonData= getJSONFromDB("select * from tutor");
  $flag=0;
  $jsn=json_decode($jsonData);
  for($i=0;$i<sizeof($jsn);$i++){
		if($_POST['username'] == trim($jsn[$i]->username) && $_POST['password'] == trim($jsn[$i]->password)){
			$_SESSION["flag2"]=$u;
			$flag2=1;
		}
}
if($flag2==1){
  echo '<script type="text/javascript">';
  echo 'alert("Logged In");';
  //echo 'window.location.href = "homepage.php";';
  echo '</script>';
	header("Location:teacher_page.php");
}

else{
    ?> <script>alert('wrong username or password');</script>"; <?php
	header("Location:homepage.php");

}
}


if($_POST['option'] == "admin")
{
  require("mysql-to-json.php");
  $jsonData= getJSONFromDB("select * from admin");
  $flag=0;
  $jsn=json_decode($jsonData);
  for($i=0;$i<sizeof($jsn);$i++)
  {
		if($_POST['username'] == trim($jsn[$i]->Username) && $_POST['password'] == trim($jsn[$i]->Password))
    {
			$_SESSION["flag3"]=$u;
			$flag3=1;
		}
}
if($flag3==1){

  echo '<script type="text/javascript">';
  echo 'alert("Logged In");';
  //echo 'window.location.href = "homepage.php";';
  echo '</script>';
	header("Location:admin_page.php");
}

else{
    ?> <script>alert('wrong username or password');</script>"; <?php
	header("Location:homepage.php");

}
}

?>
