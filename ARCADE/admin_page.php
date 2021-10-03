
<?php
error_reporting(0);
include ('Connection.php');


INCLUDE('header.php');


?>

<!doctype html>
<html>
<head>
<style type="text/css" href ="bodystyles.css"></style>
<meta charset="utf-8">
<title>ADMIN FORM</title>
<link rel = "stylesheet" href = "‪universal.css">
<style>

body{font-size: 50; 
  font-kerning: 20; 
  font-weight: 15;
  border-color: blueviolet;
  align-content: center;
}

</style>
</head>

<body>
<center>
<img src="D:\XAMP\htdocs\ARCADE\arcades logo.png">

<script>

</script>

<?php

 if (isset($_POST['submit_admin'])) {
 
  $iden  = $_POST['ADMINID'];
  $adName = $_POST['ADMIN_NAME'];
  $pass  = $_POST['password'];
?>

<?php

include 'D:\XAMP\htdocs\ARCADE\Connection.php';

$Insert = "insert into admin(ADMINID, ADMIN_NAME, password) values ('$iden', '$adName', '$pass')";

 $sql_query = mysqli_query($conn, $Insert);


if ($sql_query == TRUE){
  echo "Data Submitted";
?>
<a href = "admin_panel.php"> Go to Admin Panel </a>

<?php

}else{
  echo "ERROR";
}

}

?>

<form id = "form1" name = "form1" method="POST" >

	<table width="200" >
		<p> Enter your admin details</p>
  <tbody>
    <tr>
      <td>identification number</td>
      <td><input type="number" name = "ADMINID"></td>
      
    </tr>
    <tr>
     <td>user name</td>
      
      <td><input type="text" name = "ADMIN_NAME"></td>
      
    </tr>
    <tr>
    	<td>password</td>
    	<td><input type="password" name = "password" ></td>
    </tr>
  </tbody>
</table>

<input type="submit" name = "submit_admin" value = "submit">


<input type="reset" name = "reset">
 
</form>
</center>
</body>

<?php
INCLUDE('footer.php'); ?>
</html>