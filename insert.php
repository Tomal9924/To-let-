<pre>
<?php
 if(strlen($_REQUEST['post'])>0 &&  $_REQUEST['class']!="class"){
 	$checkBox = implode(',', $_POST['subject']);
	require("mysql-to-json.php");
    if(insert("INSERT INTO student_post(post,datecreation,user,class,subject) VALUES('".$_REQUEST['post']."',current_timestamp,'".$_REQUEST['username']."','".$_REQUEST['class']."','".$checkBox."')") >0 ){

        // echo '<script type="text/javascript">'; 
         //echo 'alert("Post Done.");'; 
         //echo 'window.location.href = "student_page.php";';
         //echo '</script>';        
			  header("Location:student_page.php");

		 }
	}

	if(strlen($_REQUEST['post2'])>0 &&  $_REQUEST['class']>0){
    $class = implode(',', $_POST['class']);
    $subject = implode(',', $_POST['subject']);
	require("mysql-to-json.php");
    if(insert("INSERT INTO teacher_post(post,datecreation,user,class,subject) VALUES('".$_REQUEST['post2']."',current_timestamp,'".$_REQUEST['username']."','".$class."','".$subject."')") >0 ){

        // echo '<script type="text/javascript">'; 
         //echo 'alert("Post Done.");'; 
         //echo 'window.location.href = "student_page.php";';
         //echo '</script>';        
			  header("Location:teacher_page.php");

		 }
	}

	else{
			echo "error!!";	
		} 

?>

</pre>