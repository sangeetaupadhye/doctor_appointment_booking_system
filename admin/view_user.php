<?php include_once('./header.php'); ?>

<?php include_once('./sidebar.php'); ?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-12">

          <div class="card">
            <div class="card-header bg-info">
              <h3 class="card-title h2">View Users</h3>
              <!-- <a href="./addDoctor.php" class="btn btn-dark float-right">Add Doctor</a> -->
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped" style="border: none;">  <thead>
                  <tr class="text-center bg-dark">
                    <th>S.No</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Phone</th>
                 
                    
                  </tr>
        
                <tbody class="text-center">
                  <?php
                  $qry = "select * from user where user_type ='Patient'";
                  $exc = mysqli_query($con, $qry);
                  $i = 1;
                  while ($row = mysqli_fetch_array($exc)) {
                    ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['user_email']; ?></td>
                      <td><?php echo $row['user_name']; ?></td>
                      <td><?php echo $row['phone']; ?></td>
                     
                      </tr>
                    <?php
                    $i++;
                  }
                  ?>
                </tbody>
              </table>
            </div>
            </div>
          </div>

      </div></div>
  </div></div>
<?php include_once('./footer.php'); ?>
