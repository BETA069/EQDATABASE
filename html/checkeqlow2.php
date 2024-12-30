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
                        <h3 class="card-header m-0 me-2 pb-3">ประวัติการตรวจครุภัณฑ์ต่ำกว่าเกณฑ์</h3>
                        
                      </div>
                     
                      <div class="card-body">


					<?php $eid=$_GET['eid']; ?>
					  
					  
					  
					  
                    <!-- ปุ่มเพิ่มที่อยู่ด้านขวา -->
                 <div class="d-flex justify-content-end mb-3" style="margin-right: 60px; margin-bottom: 15px;">
					 
					 <?php 
					 $sql2="SELECT * FROM `equipments_low` WHERE `eq_id`=$eid";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_assoc($result2);

$sum_id=$row2['sum_id'];
					 ?>
					 
					 
                     <a href="checkeqlow.php?eid=<?php echo $sum_id; ?>">
                     <button type="button" class="btn btn-outline-danger">ย้อนกลับ</button>
                     </a> &nbsp;
					 <a href="addcheckeqlow.php?eid=<?php echo $eid;?>">
                     <button type="button" class="btn btn-success">เพิ่ม</button>
                      </a>   
                    </div>
					  
				    <br>
                    
                    <div class="table-responsive">
                      <table width="802" border="0" class="table table-hover">
                        <tbody>
                          <tr style="background-color: #777e5c" >
                            <td width="56" align="center"><strong>ที่</strong></h6></td>
                            <td width="350" align="center"><strong>วันที่ตรวจ</strong></h6></td>
                            <td width="409" align="center"><strong>สภา</strong>พ</h6></td>
                            <td width="494" align="center"><strong>จัดการ</strong></h6></td>
                          </tr>
                          <?php
							
							$n=1;
                          $sql = "SELECT * FROM `heleqlow` WHERE `eq_id`=$eid";
                          $result = mysqli_query($con, $sql);
                          if (mysqli_num_rows($result) > 0) {
                              while ($row = mysqli_fetch_assoc($result)) {
                          ?>
                          <tr>
                            <td align="center"><?php echo $n; ?></td>
                            <td align="center"><?php echo $row['date']; ?></td>
                            <td align="center"><?php echo $row['hel']; ?></td>
                            <td align="center">
								
								
                             

                             
								
                              <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row['eq_id'];?>">
  ลบ
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['eq_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">โปรดตรวจสอบข้อมูล</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        โปรดตรวจตรวจสอบข้อมูลให้แน่ใจก่อนทำการลบ<br>
		<font color="#FF0004">หมายเหตุ:เมื่อทำการลบข้อมูลจะไม่สามารถกู้ข้อมูลได้</font>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="deleqlow.php?eid=<?php echo $row['eq_id'];?>">
        <button type="button" class="btn btn-danger">ยืนยันการลบข้อมูล</button>
        </a>      </div>
    </div>
  </div>
</div>
                            </td>
                          </tr>
                          <?php 
							  $n=$n+1;
							  }} ?>
                        </tbody>
                      </table>

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