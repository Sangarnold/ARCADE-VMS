
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
<title>RECEPTIONIST PANEL</title>
<link rel = "stylesheet" href = "‪D:\XAMP\htdocs\ARCADE\css for tables.css"  type = "text/css">
</head>

<body>
<center>
<img src="D:\XAMP\htdocs\ARCADE\arcades logo.png">

<h3>receptionist panel</h3>

<h4>please enter details for the visitor</h4>

<?php

if(isset($_POST['submit_visitor'])){

$v_id = $_POST['VISITOR_ID'];
$v_name = $_POST['VISITOR_NAME'];
$v_contact = $_POST['VISITOR_CONTACT'];
$v_email = $_POST['VISITOR_EMAIL'];
$v_pic = $_POST['VISITOR_PICTURE'];
$v_reason = $_POST['VISITOR_REASON'];
$r_id = $_POST['RECEPTIONIST_ID'];

include 'Connection.php';

$Insert_visitor = "insert into visitor(VISITOR_ID, VISITOR_NAME, VISITOR_CONTACT, VISITOR_EMAIL, VISITOR_PICTURE, VISITOR_REASON, RECEPTIONIST_ID) VALUES('$v_id', '$v_name', '$v_contact','$v_email','$v_pic','$v_reason','$r_id')";

//$Insert_visitor = "insert into visitor VALUES(

 $sql_query = mysqli_query($conn, $Insert_visitor);


if ($sql_query == TRUE){
  echo "Data Submitted";

}else{
  echo mysqli_error($conn);
}

}

?>

<form id = "form3" name = "form3" method="POST">

  <table  >
   
   <tr>
      <td>visitor identification number</td>
      <td><input type="number" name = "VISITOR_ID"></td>
    </tr>

    <tr>
     <td>visitor name</td>  
      <td><input type="text" name = "VISITOR_NAME"></td>
    </tr>


    <tr>
     <td>visitor contact</td>  
      <td><input type="text" name = "VISITOR_CONTACT"></td>
    </tr>


    <tr>
     <td>visitor email</td>  
      <td><input type="text" name = "VISITOR_EMAIL"></td>
    </tr>


    <tr>
     <td>visitor picture</td>  
      <td><input type="FILE" name = "VISITOR_PICTURE"></td>
    </tr>


<tr>
     <td>visitor reason</td>  
      <td><input type="text" name = "VISITOR_REASON"></td>
    </tr>

<tr>
<td>receptionist id</td>
      <td><input type="TEXT" name = "RECEPTIONIST_ID"></td>
    </tr>
</table>

<input type="submit" name = "submit_visitor" value = "submit">


<input type="reset" name = "reset">

<?php
INCLUDE('footer.php'); ?>
</center>
</body>
</html>