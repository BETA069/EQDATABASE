<?php include("connect.php"); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$eid = $_GET['eid'];
	
	$sql = "DELETE FROM `source_money` WHERE `money_id` = $eid";
	$result = mysqli_query($con,$sql);
	?>
	<?php
  header( 'Location: money.php' ) ;
?>
</body>
</html>