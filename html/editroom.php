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
                        <h3 class="card-header m-0 me-2 pb-3">แก้ไขห้องใช้งาน</h3>
                        
                      </div>
                     
                      <div class="card-body">
                          
				<?php 
	$eid = $_GET['eid'];
	?>

							<form action="editroom2.php?eid=<?php echo $eid;?>" method="post" >
								<table width="333" border="0" class="table table-hover">
  <tbody>
   
	  <?php 
		$sql = "SELECT * FROM `room` WHERE `room_id` = $eid";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result)>0){
			while ($row = mysqli_fetch_assoc($result)){
				
		?>
    <tr>
      <td align="center"><strong>ห้องใช้งาน</strong></td>
      <td align="center"><input name="name" type="text" id="name" value="<?php echo $row['room'];?>" class="form-control"></td>
    </tr>
	  <?php 
			}
		}
	  ?>
   
  </tbody>
</table>
<br>
								<center>
								<button type="button" class="btn btn-outline-danger" onclick="history.back();">ย้อนกลับ</button>
		  <input type="submit" name="submit" id="submit" value="บันทึก" class="btn btn-success">
								</center>
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
