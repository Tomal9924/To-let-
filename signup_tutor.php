<pre>
<?php
$s=$_FILES['fileToUpload']['tmp_name'];
$n=$_FILES['fileToUpload']['name'];
$sz=$_FILES['fileToUpload']['size'];
move_uploaded_file($s,"tutor_images/".$n);


 if(strlen($_REQUEST['firstName'])>0 && strlen($_REQUEST['lastName'])>0 && $_REQUEST['day']!="day" &&
 $_REQUEST['month']!="month" && $_REQUEST['year']!="year" && strlen($_REQUEST['gender'])>0 && strlen($_REQUEST['qualification'])>0 && strlen($_REQUEST['phone'])>0
 && strlen($_REQUEST['email'])>0 && strlen($_REQUEST['password'])>0 && strlen($_REQUEST['confirmPassword'])>0 ){

	if(strlen($_REQUEST['phone'])==11){

		if($_REQUEST['password'] == $_REQUEST['confirmPassword']){

				  require("mysql-to-json.php");
				  if(insert("INSERT INTO tutor(firstname,lastname,gender,qualification,phone,email,username,password,confpass,day,month,year,fileToUpload) VALUES('".$_REQUEST['firstName']."','".$_REQUEST['lastName']."','".$_REQUEST['gender']."','".$_REQUEST['qualification']."','".$_REQUEST['phone']."','".$_REQUEST['email']."'
				  ,'".$_REQUEST['uname']."','".$_REQUEST['password']."','".$_REQUEST['confirmPassword']."','".$_REQUEST['day']."'
				  ,'".$_REQUEST['month']."','".$_REQUEST['year']."','tutor_images/".$n."')")>0){


					   }



		else{

				echo "<br/>Sorry invalid email!";
			}

		}
		else{
			echo "<br/>Sorry password mismatched!";

		}
	}
	else{
			echo "<br/>phone number invalid!";

		}

		 ?><script>
		   alert("Success");
		 </script> <?php
     header("Location:homepage.php");
}


else{
	echo "error";
}
?>

</pre>
