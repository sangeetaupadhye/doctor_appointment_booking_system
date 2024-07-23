<?php include_once('./header.php'); ?>

<?php include_once('./sidebar.php'); ?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-12">

          <div class="card">
            <div class="card-header bg-info">
              <h3 class="card-title h2">View Doctors</h3>
              <a href="./addDoctor.php" class="btn btn-dark float-right">Add Doctor</a>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped" style="border: none;">  <thead>
                  <tr class="text-center bg-dark">
                    <th>S.No</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>


                    
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $qry = "select * from user where user_type ='Doctor'";
                  $exc = mysqli_query($con, $qry);
                  $i = 1;
                  while ($row = mysqli_fetch_array($exc)) {
                    ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['user_email']; ?></td>
                      <td><?php echo $row['user_name']; ?></td>
                      <td><?php echo $row['phone']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                      <td class="text-center">
                        <!-- <a href="editDoctor.php?id=<?php echo $row['user_id']; ?>" class="btn btn-sm btn-warning">Edit</a> -->
                        <a href="deleteDoctor.php?id=<?php echo $row['user_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this doctor?');">Delete</a>
                    </td>

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
