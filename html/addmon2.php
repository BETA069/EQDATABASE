<?php include("connect.php"); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php 
	$name = $_POST['name'];
	
	$sql = "INSERT INTO `source_money`(`money`) VALUES ('$name')";
	$result = mysqli_query($con,$sql);
	?>
	<?php
  header( 'Location: money.php' ) ;
?>
</body>
</html>