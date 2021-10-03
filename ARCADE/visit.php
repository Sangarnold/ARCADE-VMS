
<?php
error_reporting(0);
include ('Connection.php');


INCLUDE('header.php');




?>


<html>

<head>
  <style type="text/css" href ="bodystyles.css"></style>
  </head>
<body>



<?php

INCLUDE('sidebar.php');

  if(isset($_POST['Submit'])){
$V_D_N   = $_POST['VISIT_DATE_IN'];
$V_T_I   = $_POST['VISIT_TIME_IN'];
$V_T_O   = $_POST['VISIT_TIME_OUT'];
$S_N     = $_POST['SHOP_NO'];
$V_I     = $_POST['VISITOR_ID'];


INCLUDE 'Connection.php';
 

$Insert ="INSERT INTO VISIT(VISIT_DATE_IN, VISIT_TIME_IN, VISIT_TIME_OUT, SHOP_NO, VISITOR_ID) VALUES('$V_D_N', '$V_T_I', '$V_T_O', '$S_N', '$V_I')";


$sql_query = mysqli_query($conn, $Insert);

if ($sql_query == TRUE){
  echo "Data Submitted";
}else{
  echo mysqli_error($conn);
}
}

?>


<center>
<form id = "form5" name = "form5" method="POST" action = "" >
<table>
  <caption>
  ENTER DETAILS FOR A VISIT
  </caption>
  <tbody>
    <tr>
      <td>DATE IN</td>
      <td><input type="DATE" name="VISIT_DATE_IN"></td>
      </tr>

       <tr>
      <td>TIME IN</td>
      <td><input type="TIME" name="VISIT_TIME_IN"></td>
      </tr>
<tr>
      <td>TIME OUT</td>
      <td><input type="TIME" name="VISIT_TIME_OUT"></td>
      </tr>

<TR>
  <td>shop number</td>
      <td><input type="number" name = "SHOP_NO"></td>
        </tr>

<TR>
  <td>visitor id</td>
      <td><input type="number" name = "VISITOR_ID"></td>
</TR>
<tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" id="submit" value="Submit"></td>
    </tr>

  </tbody>
</table>
<aside>
  <br>
</aside>
</form>
</center>
</body>
<?php
INCLUDE('footer.php'); ?>
</html>