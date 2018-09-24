<?php
$conn = mysqli_connect("localhost", "root", "","tution");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

require("db_rw.php");
//echo "i am talking from server<br>";
//echo "Hello : ".$_REQUEST['uname'];

if(isset($_REQUEST["firstname"])){
	$sql="select * from student where firstname='".$_REQUEST["firstname"]."'";
	echo $sql;
	$a=getDataFromDB($sql);
	//echo "<pre>";print_r($a);echo "<pre>";
	foreach($a as $v){
		echo "<p>".$v["firstname"]."</p>";
	}
}



?>
