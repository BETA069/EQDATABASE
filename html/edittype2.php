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
	
	$sql = "UPDATE `type` SET `condition`='$name' WHERE `type_id` = $eid";
	$result = mysqli_query($con,$sql);
	?>
	<?php
  header( 'Location: type.php' ) ;
?>
</body>
</html>