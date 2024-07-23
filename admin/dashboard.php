<?php include_once('./header.php');?>

 
<?php include_once('./sidebar.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-6">
                    <div class="card bg-dark border border-light">
                        <div class="card-body">
                            <p class="h1 p-5">Patients
                                <?php 
                                    $qry = "SELECT COUNT(*) as total_patients FROM user WHERE user_type='Patient'";
                                    $exc = mysqli_query($con, $qry);
                                    $row = mysqli_fetch_array($exc);
                                    $total_patients = $row['total_patients'];
                                ?>
                                <span class="display-1 float-right"><?php echo $total_patients; ?></span>
                            </p>
                        </div>
                    </div>
                </div>
		  
          <div class="col-6">
                    <div class="card bg-light border border-dark">
                        <div class="card-body">
                            <p class="h1 p-5">Doctors
                                <?php 
                                    $qry = "SELECT COUNT(*) as total_doctors FROM user WHERE user_type='Doctor'";
                                    $exc = mysqli_query($con, $qry);
                                    $row = mysqli_fetch_array($exc);
                                    $total_doctors = $row['total_doctors'];
                                ?>
                                <span class="display-1 float-right"><?php echo $total_doctors; ?></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card bg-light border border-dark">
                        <div class="card-body">
                            <p class="h1 p-5">Appointments
                                <?php 
                                    $qry = "SELECT COUNT(*) as total_accepted FROM appoitments";
                                    $exc = mysqli_query($con, $qry);
                                    $row = mysqli_fetch_array($exc);
                                    $total_accepted = $row['total_accepted'];
                                ?>
                                <span class="display-1 float-right"><?php echo $total_accepted; ?></span>
                            </p>
                        </div>
                    </div>
                </div>
          
         
        </div>
      

      </div><!-- /.container-fluid -->
     
    </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <?php include_once('./footer.php');?>

 