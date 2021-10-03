
<?php
error_reporting(0);
include ('Connection.php');


INCLUDE('header.php');




?>
	<html>
<style type="text/css" href ="bodystyles.css"></style>
	<head>
		<title>
			dashboard
		</title>
	</head>


<?php
//QUERIES
	$sql_query = mysqli_query($conn, "select * from VISITS where date(VISIT_DATE_IN) < CURDATE()");

	$queryTODAY = mysqli_query($conn, "select * FROM VISITS where date(VISIT_DATE_IN) = CURDATE();");

	$queryYESTO = mysqli_query($conn, "select * FROM VISITS where date(VISIT_DATE_IN) < CURDATE()-1;");

	$countALL = mysqli_num_rows($sql_query);

	$countTODAY = mysqli_num_rows($queryTODAY);

	$countYESTO = mysqli_num_rows($queryYESTO);


?>

<BODY>

<?php INCLUDE('sidebar.php'); 

?>

<H1>
YESTERDAY VISITS</H1>

<P STYLE = "COLOR : PURPLE; border-color: BLUE; border-width:10; border-style: solid; ;">YESTERDAY VISITS: <SPAN > <?PHP echo $countYESTO ?> </SPAN></P>

<?php

$yestoRows = mysqli_fetch_assoc($queryYESTO);

$countYESTOrunning = mysqli_num_rows($queryYESTO);

while($countYESTOrunning > 0){

$countYESTOrunning = $countYESTOrunning-1;


	?>

ID: <?php echo $yestoRows['VISITOR_ID']; ?><br>
Name:<b><?php echo $yestoRows['VISITOR_NAME']; ?><br></b>
Contact: <B><?php echo $yestoRows['VISITOR_CONTACT']; ?><br></B>
Email:<?php echo $yestoRows['VISITOR_EMAIL']; ?><br>
Reason: <?php echo $yestoRows['VISITOR_REASON']; ?><br>
Time In:<?php echo $yestoRows['VISIT_TIME_IN']; ?><br>
Time Out:<?php echo $yestoRows['VISIT_TIME_OUT']; ?><br>
SHOP VISTED: <?php echo $yestoRows['SHOP_NO']; ?><br>
<BR>
<HR>
</HR>
</HR>
<?php

}
  ?>



<H1>
Today VISITS</H1>

<P STYLE = "COLOR : PURPLE; border-color: PURPLE; border-width:10; border-style: solid; ;">Today VISITS: <SPAN style="text-decoration: underline;"><?PHP echo $countTODAY ?></SPAN> </P>

<?php

$todayRows = mysqli_fetch_assoc($queryTODAY);

$countTODAYrunning = mysqli_num_rows($queryTODAY);

while($countTODAYrunning > 0){

$countTODAYrunning = $countTODAYrunning-1;

	?>

ID: <?php echo $todayRows['VISITOR_ID']; ?><br>
Name:<b><?php echo $todayRows['VISITOR_NAME']; ?><br></b>
Contact: <B><?php echo $todayRows['VISITOR_CONTACT']; ?><br></B>
Email:<?php echo $todayRows['VISITOR_EMAIL']; ?><br>
Reason: <?php echo $todayRows['VISITOR_REASON']; ?><br>
Time In:<?php echo $todayRows['VISIT_TIME_IN']; ?><br>
Time Out:<?php echo $todayRows['VISIT_TIME_OUT']; ?><br>
SHOP VISTED: <?php echo $todayRows['SHOP_NO']; ?><br>
<BR>
<HR>
</HR>
</HR>
<?php

}
  ?>

<i><blockquote>contact system admin for the monthly report</blockquote><i>

<H1>
ALL VISITS</H1>

<P STYLE = "COLOR : PURPLE; border-color:blueviolet; border-width:10; border-style: solid; ;">Monthly VISITS: <SPAN STYLE = "text-decoration: underline;"><?PHP echo $countALL ?> </SPAN> </P>


<?php


$allRows = mysqli_fetch_assoc($sql_query);

$countALL = mysqli_num_rows($sql_query);

while($countALL>0){

$countALL = $countALL-1;
?>

ID: <?php echo $allRows['VISITOR_ID']; ?><br>
Name:<b><?php echo $allRows['VISITOR_NAME']; ?><br></b>
Contact: <B><?php echo $allRows['VISITOR_CONTACT']; ?><br></B>
Email:<?php echo $allRows['VISITOR_EMAIL']; ?><br>
Reason: <?php echo $allRows['VISITOR_REASON']; ?><br>
Date In: <?php echo $allRows['VISIT_DATE_IN']; ?><br>
Time Out:<?php echo $allRows['VISIT_TIME_OUT']; ?><br>
SHOP VISTED: <?php echo $allRows['SHOP_NO']; ?><br>
<BR>
<HR>
</HR>
</HR>
<?php }

INCLUDE('footer.php'); ?>




</BODY>
</html>