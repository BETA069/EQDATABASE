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
                        <h3 class="card-header m-0 me-2 pb-3">จัดการผู้รับผิดชอบ</h3>
                        
                      </div>
                     
                      <div class="card-body">
                          

							<a href="addres.php">
	<button type="button" class="btn btn-success">เพิ่ม</button>
	</a>
						  <br><br>
<table width="333" border="0" class="table table-hover">
  <tbody>
    <tr style="background-color: #777e5c">
      <td width="26" align="center"><strong>ที่</strong></td>
      <td width="91" align="center"><strong>ผู้รับผิดชอบ</strong></td>
      <td width="85" align="center"><strong>จัดการ</strong></td>
    </tr>
    <tr>
		<?php 
		$sql = "SELECT * FROM `responsible`";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result)>0){
			while ($row = mysqli_fetch_assoc($result)){
				
		?>
      <td align="center"><?php echo $row['res_id'];?></td>
      <td align="center"><?php echo $row['responsible'];?></td>
	<td align="center"><a href="editres.php?eid=<?php echo $row['res_id'];?>">
	  <button type="button" class="btn btn-warning">แก้ไข</button>
	</a>
		<a href="delres.php?eid=<?php echo $row['res_id'];?>">
	  <button type="button" class="btn btn-danger">ลบ</button>
	</a>
		</td>
      </tr><?php 
			}
		}
	  ?>
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
