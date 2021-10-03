
<?php
error_reporting(0);
include ('Connection.php');


INCLUDE('header.php');




?>
<html>
<head>
<style type="text/css" href ="bodystyles.css"></style>
  <title>
  </title>
</head>
<body>
  <center>

<a href = "dashboard.php">VIEW VISITS</a>

<a href = "visitor.php">ENTER NEW VISITOR</a>

<a href = "visit.php">RECEPTIONIST PANEL</a>




<img src="D:\XAMP\htdocs\ARCADE\arcades logo.png">

      <h2>ADMINISTRATION PANEL</h2>
      
    


<script>

function go_to_view_visit_details(){
  <a href ="view_visit_details.php";
}

function go_to_owner(){

window.location.href = "#Enroll_Owner";

}
</script>


<section id = Manage_Room>
<H3>ENTER ROOM DETAILS</H3>

<?php
if (isset($_POST['submit_room'])){
  
$rNo = $_POST['SHOP_NO'];
$level = $_POST['SHOP_LEVEL'];
$admini_id = $_POST['ADMINID_R'];
$o_name = $_POST['OWNER_ID_R'];

include 'D:\XAMP\htdocs\ARCADE\Connection.php';

$Insert_into_shop = "insert into shop(SHOP_NO, SHOP_LEVEL, ADMINID, OWNER_ID)values('$rNo', '$level', '$admini_id','$o_name')";

$sql_query = mysqli_query($conn, $Insert_into_shop);

if ($sql_query == TRUE){
  echo "Data Submitted";
}else{
  echo mysqli_error($conn);
}
}
?>


<form NAME = "FORM2" METHOD = "POST" ACTION = "">
  <table width="200">
  <tbody>
    <tr>
      <td>room number</td>
      <td><input type="number" name="SHOP_NO" id="number3"></td>
    </tr>
   <tr>
      <td>level</td>
      <td><input type="text" name="SHOP_LEVEL" id="textfield2"></td>
    </tr>
    <tr>
      <td>administrator id</td>
      <td><input type="number" name="ADMINID_R" id="number4"></td>
    </tr>
    <tr>
      <td>owner id</td>
      <td><input type="number" name="OWNER_ID_R" id="number5"></td>
    </tr>
    <TR>
      <TD COLSPAN =2><input type="submit" name = "submit_room" value = "submit room"></TD>
    </tr>
  </tbody>
  
</table>

</form>


  </section>


<!-- Owner details go here -->

<section id = Enroll_Owner>
<?php
  if(isset($_POST['submit_owner'])){
$o_id = $_POST['OWNER_ID'];
$o_name = $_POST['OWNER_NAME'];
$admini_id = $_POST['ADMINID'];

include 'D:\XAMP\htdocs\ARCADE\Connection.php';

$Insert = "insert into owner(owner_id, owner_name, adminid) values ('$o_id', '$o_name', '$admini_id')";

//$Insert = "insert into owner(owner_id, owner_name, adminid) values('998','owner998','50')";

$sql_query = mysqli_query($conn, $Insert);

if ($sql_query == TRUE){
  echo "Data Submitted";
}else{
  echo mysqli_error($conn);
}
}
?>


<h3>ENTER OWNER DETAILS FOR A ROOM</h3>

<form name="form1" method="post" action="">
<table>
  <td>
<p>
  <label for="number">Owner Identification Number:</label>
</p>
</td>
<td>
  <p>
  <input type="number" name="OWNER_ID" id="number">
</p>
</td>

<td>
  <p>
    <label for="textfield">Owner Name</label>
  </p>
</td>
<td>
  <p>
    <input type="text" name="OWNER_NAME" id="textfield">
  </p>
</td>
<td>
  <p>
    <label for="number2">Admnistrator Identification Number:</label>
  </p>
</td>
<td>
  <p>
    <input type="number" name="ADMINID" id="number2">
  </p>
</td>
<td>
  <p>
    <input type="submit" name="submit_owner" id="submit" value="Submit">
  </p>
</td>
</table>
</form>
<p>&nbsp;</p>



<script>
function go_to_room(){

window.location.href = "#Manage_Room";

}
</script>

<input type="button" name="button2" id="button2" value="Manage Room" onclick= "go_to_room()">

</section>

<?php
INCLUDE('footer.php'); ?>
</center>
</body>
</html>