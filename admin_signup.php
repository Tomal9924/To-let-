<pre>
<?php

print_r($_REQUEST);
 if(strlen($_REQUEST['name'])>0 && strlen($_REQUEST['email'])>0 && strlen($_REQUEST['address'])>0
 && strlen($_REQUEST['username'])>0 && strlen($_REQUEST['password'])>0)
 {

	if(strlen($_REQUEST['phone'])==11)
  {
        require("mysql-to-json.php");
				  if(insert("INSERT INTO admin (name,phone,username,email,address,password)VALUES
          ('".$_REQUEST['name']."','".$_REQUEST['phone']."','".$_REQUEST['username']."',
          '".$_REQUEST['email']."','".$_REQUEST['address']."'
				  ,'".$_REQUEST['password']."')")>0){


					   }



}

		 header("Location:admin.php");
}


else{
	echo "error";
}
?>

</pre>
