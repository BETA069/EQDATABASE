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
	$name = $_POST['name'];
	
	$sql = "UPDATE `room` SET `room`='$name' WHERE `room_id` = $eid";
	$result = mysqli_query($con,$sql);
	?>
	<?php
  header( 'Location: room.php' ) ;
?>
</body>
</html>