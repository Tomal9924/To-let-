
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript">
  function showHint()
  {
  	str=document.getElementById('mytext').value;
  	//document.getElementById("spinner").style.visibility= "visible";
  	var xmlhttp = new XMLHttpRequest();
  	xmlhttp.onreadystatechange = function()
    {
  		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
  			document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
  			//alert(xmlhttp.responseText);
  			//document.getElementById("spinner").style.visibility= "hidden";
  		}
  	};
  	//var url="db.php?q=read&name="+str;
  	var url="db.php";
  	//alert(url);
  	xmlhttp.open("POST", url, true);
  	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  	xmlhttp.send("q=read&firstname="+str);
  }
  </script>

</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="adminPageCSS.css">




<body style="background-color: #8cb6ea;">

  <h2 style="text-align: center; font-size: 70px;background-image:url([000132].jpg);"> <a style="text-decoration:none;color:white;" href="homepage.php">TUTION WANTED</a>
  </h2>

    <!-- <div class="topnav">
  <b>


      <ul>
          <li>
          </li>
          <li> <a href="admin_profile.php">Search</a></li>
          <li> <a href="admin_profile.php">Search</a></li>

          <li><a href="logout.php">Logout</a></li>



          <li> <a href="admin_profile.php">Search</a></li>

      </ul>


    </b>
</div> -->
<br>
<div style="color:white;text-align:center;">
<br>
<br>
<br>
<br>
<br>
<br>
Your ID :
<input type="text" id="mytext" onkeyup="showHint()">
<p>Message : <span id="txtHint"></span></p>
<br/>
<input type="button" value="show" onclick="showHint()">

</div>



</body>
</html>
