<!DOCTYPE html>
<?php include("conn.php"); ?>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <?php include("head.php"); ?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <?php include("menu.php"); ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php include("nav.php"); ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-fluid container-p-y">
              <div class="row">
                
                <!-- Total Revenue -->
                
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-12">
                        <h3 class="card-header m-0 me-2 pb-3">รายการข้อมูลครุภัณฑ์ตามเกณฑ์</h3>
                        
                      </div>
                     
                      <div class="card-body">

						  
						  
						      <form method="post" action="addsuppnomal223.php">
        <!-- Row 1 -->
		
		<?php
					$eid=$_GET['eid'];
		
                    $sql = "SELECT * FROM `eqnomal` WHERE `sum_id`=$eid";
                    $result = mysqli_query($con, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){	 
                    ?>
		
		
        <div class="form-row row">
            <div class="col-md-9">
                <label for="name" class="form-label">รายการ:</label>
                <input name="name" type="text" class="form-control" id="name" value="<?php echo $row['name'];?>" readonly="readonly">
            </div>
            <div class="col-md-3">
                <label for="select_type" class="form-label">ประเภทพัสดุ:</label>
                <input name="select_type" class="form-control" id="select_type" value="<?php echo $row['type'];?>" readonly="readonly">
            </div>
        </div>

        <!-- Row 2 -->
        <div class="form-row row">
            <div class="col-md-3">
                <label for="num1" class="form-label">หมายเลขหมวดครุภัณฑ์: <font color="#FF0004"> ให้ใส่ช่องละ 4 หลัก</font></label>
                <input type="text" name="num1" id="num1" class="form-control" value="<?php echo $row['num1'];?>" readonly="readonly">
            </div>
			
			 <div class="col-md-3">
				 <label for="num1" class="form-label">หมายเลขหมวดครุภัณฑ์: <font color="#FF0004">ช่องที่2</font></label>
                <input type="text" name="num2" id="num2" class="form-control" value="<?php echo $row['num2'];?>" readonly="readonly">
            </div>
			
			<div class="col-md-3">
				 <label for="num1" class="form-label">หมายเลขหมวดครุภัณฑ์: <font color="#FF0004">ช่องที่3</font></label>
                <input type="text" name="num3" id="num3" class="form-control" value="<?php echo $row['num3'];?>" readonly="readonly">
            </div>
			
			<div class="col-md-3">
				 <label for="num1" class="form-label">หมายเลขหมวดครุภัณฑ์: <font color="#FF0004">ช่องที่4</font></label>
                <input type="text" name="num4" id="num4" class="form-control" value="<?php echo $row['num4'];?>" readonly="readonly">
            </div>

        </div>
		
		

        <!-- Row 3 -->
        <div class="form-row row">
            <div class="col-md-9">
                <label for="num2" class="form-label">หมายเลขครุภัณฑ์เริ่ม:</label>
                <input type="text" name="numstart" id="numstart" class="form-control" value="<?php echo $row['numstart'];?>" readonly="readonly">
            </div>
            <div class="col-md-3">
                <label for="number" class="form-label">จำนวน:</label>
                <input type="number" name="number" id="number" class="form-control" value="<?php echo $row['num'];?>" readonly="readonly">
            </div>
        </div>

        <!-- Row 4 -->
        <div class="form-row row">
            <div class="col-md-9">
                <label for="num3" class="form-label">หมายเลขครุภัณฑ์สุดท้าย:</label>
                <input type="text" name="numend" id="numend" class="form-control" value="<?php echo $row['numend'];?>" readonly="readonly">
            </div>
        </div>

        <!-- Row 5 -->
        <div class="form-row row">
            <div class="col-md-9">
                <label for="moneynum" class="form-label">เลขสินทรัพย์:</label>
                <input type="text" name="moneynum" id="moneynum" class="form-control" value="<?php echo $row['moneynum'];?>" readonly="readonly">
            </div>
        </div>

        <!-- Row 6 -->
        <div class="form-row row">
            <div class="col-md-9">
                <label for="select-transfer" class="form-label">การรับโอน:</label>
                <input name="select_transfer" required="required" class="form-control" id="select-transfer" value="<?php echo $row['tranfer'];?>" readonly="readonly">
               
            </div>
        </div>

        <!-- Row 7 -->
        <div class="form-row row">
            <div class="col-md-6">
                <label for="date1" class="form-label">วันที่รับโอน:</label>
                <input type="date" name="date1" id="date1" class="form-control" value="<?php echo $row['date1'];?>" readonly="readonly">
            </div>
            <div class="col-md-6">
                <label for="date2" class="form-label">วันที่ได้มา:</label>
                <input type="date" name="date2" id="date2" class="form-control" value="<?php echo $row['date2'];?>" readonly="readonly">
            </div>
        </div>

        <!-- Row 8 -->
        <div class="form-row row">
            <div class="col-md-6">
                <label for="select-money" class="form-label">แหล่งเงิน:</label>
                <input name="select_money" id="select-money" class="form-control" value="<?php echo $row['money'];?>" readonly="readonly">
                   
                
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">ราคา:</label>
                <input name="price" type="number" required="required" class="form-control" id="price" value="<?php echo $row['price'];?>" readonly="readonly">
            </div>
        </div>

        <!-- Row 9 -->
        <div class="form-row row">
            <div class="col-md-6">
                <label for="select-room" class="form-label">ห้องที่ใช้งาน:</label>
                <input name="select_room" id="select_room" class="form-control" value="<?php echo $row['room'];?>" readonly="readonly">
                 
            </div>
            <div class="col-md-6">
                <label for="select-responsible" class="form-label">ผู้รับผิดชอบ:</label>
                <input name="select_responsible" required="required" class="form-control" id="select_responsible" value="<?php echo $row['responsible'];?>" readonly="readonly">
               
            </div>
        </div>
	<div class="form-row row">
            <div class="col-md-12">
				  <label for="select-responsible" class="form-label">รูปครุภัณฑ์:</label>
				
				
				<center>
				<font color="#FF0004">กดเพื่อขยายรูป</font><br>
					<br>
					<div class="bootstrap-scope">
  <!-- Thumbnail Image with Button Trigger for Modal -->
  <button type="button" data-bs-toggle="modal" data-bs-target="#paypic<?php echo $row['pic'];?>">
    <img src="images/<?php echo $row['pic'];?>" width="500" height="250" alt=""/>
  </button>

  <!-- Modal for Image -->
  <div class="modal fade" id="paypic<?php echo $row['pic'];?>" tabindex="-1" aria-labelledby="paypicLabel<?php echo $row['pic'];?>" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="paypicLabel<?php echo $row['pic'];?>">รูปภาพ</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="images/<?php echo $row['pic'];?>" class="img-fluid" alt="Full Image"/>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
				
				
				
				
				
				
				
				
				
				  </center> </div>
        </div>
		
		<?php }} ?>
        <!-- Row 10 -->
        <div class="form-row row">
            <div class="col-md-12 text-center">
				<br><br>
				
                
                <button type="button" class="btn btn-outline-danger" onclick="history.back();">ย้อนกลับ</button>
                
    			
            </div>
        </div>
    </form>
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						     </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            
            <!-- / Content -->

            <!-- Footer -->
           <?php include("footer.php"); ?>
  </body>
</html>