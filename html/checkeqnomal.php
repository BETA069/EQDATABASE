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
                        <h3 class="card-header m-0 me-2 pb-3">รายงานการตรวจสภาพครุภัณฑ์ตามเกณฑ์</h3>
                        
                      </div>
                     
                      <div class="card-body">
                          		
							  <a href="eqnomal.php">
							  <button type="button" class="btn btn-outline-danger">ย้อนกลับ</button>
							  </a> <br><br>
                    
                    <div class="table-responsive">
                      <table width="802" border="0" class="table table-hover">
                        <tbody>
                          <tr style="background-color: #777e5c">
                            <td width="56" align="center"><strong>ที่</strong></h6></td>
                            <td width="350" align="center"><strong>หมายเลขครุภัณฑ์</strong></h6></td>
                            <td width="409" align="center"><strong>สภา</strong>พปัจจุบัน</h6></td>
                            <td width="494" align="center"><strong>จัดการ</strong></h6></td>
                          </tr>
                          <?php
							$eid=$_GET['eid'];
							$n=1;
                          $sql = "SELECT * FROM `equipments` WHERE `sum_id`=$eid";
                          $result = mysqli_query($con, $sql);
                          if (mysqli_num_rows($result) > 0) {
                              while ($row = mysqli_fetch_assoc($result)) {
			
                          ?>
                          <tr>
                            <td align="center"><?php echo $n; ?></td>
                            <td align="center"><?php echo $row['eq_code']; ?></td>
					        <td align="center"><?php echo $row['hel']; ?></td>
							
                            <td align="center">
                             
								<div class="d-flex align-items-center gap-2" align="center">
									
                              <a href="checkeqnomal2.php?eid=<?php echo $row['eq_id'];?>">
                              <button type="button" class="btn btn-primary">ตรวจสภาพ</button>
                              </a>
                             
								
                              <!-- Button trigger modal -->


<!-- Modal -->
<div class="bootstrap-scope">
  <!-- Button -->
  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['eq_id'];?>">
    ลบ
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal<?php echo $row['eq_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">โปรดตรวจสอบข้อมูล</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          โปรดตรวจสอบข้อมูลให้แน่ใจก่อนทำการลบ<br>
          <span class="text-danger">หมายเหตุ: เมื่อทำการลบข้อมูลจะไม่สามารถกู้ข้อมูลได้</span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="deleqnomal.php?eid=<?php echo $row['eq_id'];?>">
            <button type="button" class="btn btn-danger">ยืนยันการลบข้อมูล</button>
          </a>
        </div>
      </div>
    </div>
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