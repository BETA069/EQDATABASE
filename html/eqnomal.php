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
                        <h3 class="card-header m-0 me-2 pb-3"><strong>รายการข้อมูลครุภัณฑ์ตามเกณฑ์</strong></h3>
                        
                      </div>
                     
                      <div class="card-body">
                          
							 <div class="d-flex justify-content-end mb-3" style="margin-right: 60px; margin-bottom: 15px;">
                      <a href="addsuppnomal22.php">
                        <button type="button" class="btn btn-success">เพิ่ม</button>
                      </a>   
                    </div>
					  
					 

                    
                      <table width="802" border="0" align="center" class="table table-hover" style="color: #283106">
                        <tbody>
                          <tr style="background-color: #777e5c">
                            <td width="46" align="center" valign="bottom"><strong>ที่</strong>                                                            
                              <br>
                            </td>
                            <td width="259" align="center" valign="bottom"><strong>หมายเลขครุภัณฑ์</strong>                                                           
                              <br>
                            </td>
                            <td width="326" align="center" valign="bottom"><strong>รายการ</strong></td>
                            <td width="190" align="center" valign="bottom"><strong>ประเภทพัสดุ</strong></td>
							<td width="181" align="center" valign="bottom"><strong>เลขสินทรัพย์</strong></td>
							<td width="167" align="center" valign="bottom"><strong>การรับโอน</strong></td>
                            <td width="176" align="center" valign="bottom"><strong>วันที่รับโอน</strong></td>
                            <td width="180" align="center" valign="bottom"><strong>วันที่ได้มา</strong></td>
                            <td width="156" align="center" valign="bottom"><strong>แหล่งเงิน</strong></td>
                            <td width="100" align="center" valign="bottom"><strong>จำนวน</strong></td>
							<td width="104" align="center" valign="bottom"><strong>ราคา</strong></td>
                            <td width="140" align="center" valign="bottom"><strong>ห้องที่ใช้งาน</strong></td>
                            <td width="235" align="center" valign="bottom"><strong>ผู้รับผิดชอบ</strong></td>
                            <td width="392" align="center" valign="bottom"><strong>จัดการ</strong></td>
                          </tr>
                          <?php
                          $sql = "SELECT * FROM `eqnomal`";
                          $result = mysqli_query($con, $sql);
                          if (mysqli_num_rows($result) > 0) {
                              while ($row = mysqli_fetch_assoc($result)) {
                          ?>
							
                          <tr>
                            <td align="center" valign="middle"><?php echo $row['sum_id']; ?></td>
                            <td align="center" valign="middle"><?php echo $row['sumnum']; ?></td>
                            <td align="center" valign="middle"><?php echo $row['name']; ?></td>
                            <td align="center" valign="middle"><?php echo $row['type']; ?></td>
							<td align="center" valign="middle"><?php echo $row['moneynum']; ?></td>
							<td align="center" valign="middle"><?php echo $row['tranfer']; ?></td>
                            <td align="center" valign="middle"><?php echo $row['date1']; ?></td>
                            <td align="center" valign="middle"><?php echo $row['date2']; ?></td>
                            <td align="center" valign="middle"><?php echo $row['money']; ?></td>
                            <td align="center" valign="middle"><?php echo $row['num']; ?></td>
							<td align="center" valign="middle"><?php echo $row['price']; ?></td>
                            <td align="center" valign="middle"><?php echo $row['room']; ?></td>
                            <td align="center" valign="middle"><?php echo $row['responsible']; ?></td>
                            <td align="center" valign="middle"><div class="d-flex align-items-center gap-2">
                              <a href="detailsuppnomal22.php?eid=<?php echo $row['sum_id'];?>">
                              <button type="button" class="btn btn-info">รายละเอียด</button>
                              </a>
                              <a href="checkeqnomal.php?eid=<?php echo $row['sum_id'];?>">
                              <button type="button" class="btn btn-primary">ตรวจ</button>
                              </a>
								<a href="editeqnomal.php?eid=<?php echo $row['sum_id'];?>">
<button type="button" class="btn btn-warning">แก้ไข</button>
								</a>
								
								
							
                              <!-- Button trigger modal -->
<div class="bootstrap-scope">
  <!-- Button -->
  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['sum_id'];?>">
    ลบ
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal<?php echo $row['sum_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <a href="delnomalsupp.php?eid=<?php echo $row['sum_id'];?>">
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
                          <?php }} ?>
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
