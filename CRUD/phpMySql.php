
<?php 
$con=mysqli_connect("localhost","root","root","my_db");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

<html>
<head>
<title>Welcome to CRUD !!!</title>
<link rel="stylesheet" type="text/css" href="css.css" />
</head>
<body>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$('#form').submit(function() {
		
		var a = $("#firstname").val();
		var b = $("#lastname").val();
		var c = $("#age").val();
		if(a == null || a == ''){
			alert("Please fill the form");
			return false;
			}
		else if(b == null || b == ''){
			alert("Please fill the form");
			return false;
			}
		else if(c == null || c == ''){
			alert("Please fill the form");
			return false;
			}
		
	});

})
</script>
<div>
<form id ="form" name="myForm" action="insert.php" method="POST" >
<table border = "2" solid black width = "300" >
<tr><td class = "lbbutton" >Firstname: </td><td class = "cbutton"><input type="text" name="firstname" id="firstname" size = "35"></td></tr>
<tr><td class = "lbbutton" >Lastname: </td><td class = "cbutton"><input type="text" name="lastname" id = "lastname" size = "35"></td></tr>
<tr><td class = "lbbutton" >Age: </td><td class = "cbutton"><input type="text" name="age" id = "age" size = 35"></td></tr>
<tr><td class = "lbbutton" ><input type="submit" value = "Submit"></td><td class = "cbutton"><input type = RESET VALUE = "Reset"></td></tr>

</table>
</form>
</div>
<a href='home.php'>Back Home</a>
</body>
</html>