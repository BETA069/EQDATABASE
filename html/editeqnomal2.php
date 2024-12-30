<?php
include("conn.php");
$eid=$_GET['eid'];
$name = $_POST['name'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$num4 = $_POST['num4'];
$numend = $_POST['numend'];
$numstart = $_POST['numstart'];
$moneynum = $_POST['moneynum'];
$type = $_POST['select_type'];
$st = $_POST['select_transfer'];
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
$sm = $_POST['select_money'];
$price = $_POST['price'];
$room = $_POST['select_room'];
$rp = $_POST['select_responsible'];
$number = $_POST['number'];

// อัปเดตข้อมูลใน `eqnomal`
$sql = "UPDATE `eqnomal` SET `sumnum`='$num1-$num2-$num3-$num4-$numstart',`name`='$name',`type`='$type',`date1`='$date1',`date2`='$date2',`money`='$sm',`num`='$number',`room`='$room',`responsible`='$rp',`numstart`='$numstart',`numend`='$numend',`moneynum`='$moneynum',`tranfer`='$st',`price`='$price',`num1`='$num1',`num2`='$num2',`num3`='$num3',`num4`='$num4' WHERE `sum_id`=$eid";
$result = mysqli_query($con, $sql);

if (!$result) {
    die("Error updating data: " . mysqli_error($con));
}

// ตรวจสอบหมายเลขเริ่มต้นและหมายเลขสุดท้ายใหม่
$start_suffix = (int)substr($numstart, -3);
$end_suffix = (int)substr($numend, -3);

if ($start_suffix > $end_suffix) {
    die("หมายเลขครุภัณฑ์สุดท้ายต้องมากกว่าหรือเท่ากับหมายเลขเริ่มต้น");
}

// อัปเดตข้อมูลใน `equipments`
$prefix = substr($numstart, 0, -4); // ดึงส่วนต้นของหมายเลข
mysqli_query($con, "DELETE FROM `equipments` WHERE `sum_id` = '$eid'"); // ลบข้อมูลเดิม

for ($i = $start_suffix; $i <= $end_suffix; $i++) {
    $equipment_no = $prefix . str_pad($i, 3, '0', STR_PAD_LEFT);

    $sql = "INSERT INTO `equipments`(`eq_code`, `sum_id`) VALUES ('$equipment_no','$eid')";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die("Error in updating equipments: " . mysqli_error($con));
    }
}

header("Location: index.php");
?>
