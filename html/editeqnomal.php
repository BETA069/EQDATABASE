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
                        <h3 class="card-header m-0 me-2 pb-3">แก้ไขข้อมูลครุภัณฑ์ตามเกณฑ์</h3>
                        
                      </div>
                     
                      <div class="card-body">
						  <?php
					$eid=$_GET['eid'];
		
                    $sql = "SELECT * FROM `eqnomal` WHERE `sum_id`=$eid";
                    $result = mysqli_query($con, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){	 
                    ?>
                 <form action="editeqnomal2.php?eid=<?php echo $eid; ?>" method="post" enctype="multipart/form-data">
        <!-- Row 1 -->
        <div class="form-row row">
            <div class="col-md-9">
                <label for="name" class="form-label">รายการ:</label>
                <input name="name" type="text" required="required" class="form-control" id="name" value="<?php  echo $row['name'];?>">
            </div>
            <div class="col-md-3">
                <label for="select_type" class="form-label">ประเภทพัสดุ:</label>
                <select name="select_type" required="required" class="form-control" id="select_type">
					<option value="<?php  echo $row['type'];?>"><?php  echo $row['type'];?></option>
                    <?php
                    $sql6 = "SELECT * FROM `type`";
                    $result6 = mysqli_query($con, $sql6);
                    if(mysqli_num_rows($result6) > 0){
                        while($row6 = mysqli_fetch_assoc($result6)){	 
                    ?>
                  <option value="<?php echo $row6['type'];?>"><?php echo $row6['type'];?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="form-row row">
            <div class="col-md-3">
                <label for="num1" class="form-label">หมายเลขหมวดครุภัณฑ์: <font color="#FF0004"> ให้ใส่ช่องละ 4 หลัก</font></label>
                <input name="num1" type="number" required="required" class="form-control" id="num1" value="<?php  echo $row['num1'];?>">
            </div>
			
			 <div class="col-md-3">
				 <label for="num1" class="form-label">หมายเลขหมวดครุภัณฑ์: <font color="#FF0004">ช่องที่2</font></label>
                <input name="num2" type="number" required="required" class="form-control" id="num2" value="<?php  echo $row['num2'];?>">
            </div>
			
			<div class="col-md-3">
				 <label for="num1" class="form-label">หมายเลขหมวดครุภัณฑ์: <font color="#FF0004">ช่องที่3</font></label>
                <input name="num3" type="number" required="required" class="form-control" id="num3"value="<?php  echo $row['num3'];?>">
            </div>
			
			<div class="col-md-3">
				 <label for="num1" class="form-label">หมายเลขหมวดครุภัณฑ์: <font color="#FF0004">ช่องที่4</font></label>
                <input name="num4" type="number" required="required" class="form-control" id="num4" value="<?php  echo $row['num4'];?>">
            </div>

        </div>
		
		

        <!-- Row 3 -->
        <div class="form-row row">
            <div class="col-md-9">
                <label for="num2" class="form-label">หมายเลขครุภัณฑ์เริ่ม:</label>
                <input name="numstart" type="number" required="required" class="form-control" id="numstart" value="<?php  echo $row['numstart'];?>">
            </div>
            <div class="col-md-3">
                <label for="number" class="form-label">จำนวน:</label>
                <input name="number" type="number" required="required" class="form-control" id="number" value="<?php  echo $row['num'];?>">
            </div>
        </div>

        <!-- Row 4 -->
        <div class="form-row row">
            <div class="col-md-9">
                <label for="num3" class="form-label">หมายเลขครุภัณฑ์สุดท้าย:</label>
                <input name="numend" type="number" required="required" class="form-control" id="numend" value="<?php  echo $row['numend'];?>">
            </div>
        </div>

        <!-- Row 5 -->
        <div class="form-row row">
            <div class="col-md-9">
                <label for="moneynum" class="form-label">เลขสินทรัพย์:</label>
                <input name="moneynum" type="text" required="required" class="form-control" id="moneynum" value="<?php  echo $row['moneynum'];?>">
            </div>
        </div>

        <!-- Row 6 -->
        <div class="form-row row">
            <div class="col-md-9">
                <label for="select-transfer" class="form-label">การรับโอน:</label>
                <select name="select_transfer" required="required" class="form-control" id="select-transfer" value="<?php  echo $row['tranfer'];?>">
					<option value="<?php  echo $row['tranfer'];?>"><?php  echo $row['tranfer'];?></option>
                    <?php
                    $sql2 = "SELECT * FROM `receive_transfer`";
                    $result2 = mysqli_query($con, $sql2);
                    if(mysqli_num_rows($result2) > 0){
                        while($row2 = mysqli_fetch_assoc($result2)){	 
                    ?>
                    <option value="<?php echo $row2['transfer'];?>"><?php echo $row2['transfer'];?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
        </div>

        <!-- Row 7 -->
        <div class="form-row row">
            <div class="col-md-6">
                <label for="date1" class="form-label">วันที่รับโอน:</label>
                <input name="date1" type="date" required="required" class="form-control" id="date1" value="<?php  echo $row['date1'];?>">
            </div>
            <div class="col-md-6">
                <label for="date2" class="form-label">วันที่ได้มา:</label>
                <input name="date2" type="date" required="required" class="form-control" id="date2" value="<?php  echo $row['date2'];?>">
            </div>
        </div>

        <!-- Row 8 -->
        <div class="form-row row">
            <div class="col-md-6">
                <label for="select-money" class="form-label">แหล่งเงิน:</label>
                <select name="select_money" required="required" class="form-control" id="select-money" value="<?php  echo $row['money'];?>">
					<option value="<?php  echo $row['money'];?>"><?php  echo $row['money'];?></option>
                    <?php
                    $sql3 = "SELECT * FROM `source_money`";
                    $result3 = mysqli_query($con, $sql3);
                    if(mysqli_num_rows($result3) > 0){
                        while($row3 = mysqli_fetch_assoc($result3)){	 
                    ?>
					
                    <option value="<?php echo $row3['money'];?>"><?php echo $row3['money'];?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">ราคา:</label>
                <input name="price" type="number" required="required" class="form-control" id="price" value="<?php  echo $row['price'];?>">
            </div>
        </div>

        <!-- Row 9 -->
        <div class="form-row row">
            <div class="col-md-6">
                <label for="select-room" class="form-label">ห้องที่ใช้งาน:</label>
                <select name="select_room" required="required" class="form-control" id="select_room" value="<?php  echo $row['room'];?>">
					<option value="<?php  echo $row['room'];?>" ><?php  echo $row['room'];?></option>
                    <?php
                    $sql4 = "SELECT * FROM `room`";
                    $result4 = mysqli_query($con, $sql4);
                    if(mysqli_num_rows($result4) > 0){
                        while($row4 = mysqli_fetch_assoc($result4)){	 
                    ?>
                    <option value="<?php echo $row4['room'];?>"><?php echo $row4['room'];?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-6">
                <label for="select-responsible" class="form-label">ผู้รับผิดชอบ:</label>
                <select name="select_responsible" required="required" class="form-control" id="select_responsible" value="<?php  echo $row['responsible'];?>">
					<option value="<?php  echo $row['responsible'];?>"><?php  echo $row['responsible'];?></option>
                    <?php
                    $sql5 = "SELECT * FROM `responsible`";
                    $result5 = mysqli_query($con, $sql5);
                    if(mysqli_num_rows($result5) > 0){
                        while($row5 = mysqli_fetch_assoc($result5)){	 
                    ?>
                    <option value="<?php echo $row5['responsible'];?>"><?php echo $row5['responsible'];?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
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
					 
					 
					 
				    <?php }} ?>
					<br>
					<a href="editeqnomalpic.php?eid=<?php echo $eid;?>">
					<button type="button" class="btn btn-warning">แก้ไขรูปครุภัณฑ์</button>
					</a>
	
        <!-- Row 10 -->
        <div class="form-row row">
            <div class="col-md-12 text-center">
				<br><br>
				
                
                <button type="button" class="btn btn-outline-danger" onclick="history.back();">ย้อนกลับ</button>
                
    			<button type="submit" class="btn btn-success">บันทึก</button>
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



 
