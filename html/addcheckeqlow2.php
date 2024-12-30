<?php include("conn.php"); ?>
<?php 

$eid=$_GET['eid'];
$radio=$_POST['radio1'];
$date=$_POST['date'];

$sql="INSERT INTO `heleqlow`(`eq_id`, `hel`, `date`) VALUES ('$eid','$radio','$date')";
$result=mysqli_query($con,$sql);

$sql2="UPDATE `equipments_low` SET `hel`='$radio' WHERE `eq_id`=$eid";
$result2=mysqli_query($con,$sql2);


 header( "Location: checkeqlow2.php?eid=$eid" ) ;

?>

 
