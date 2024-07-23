<?php include("./header.php"); ?>
<?php include("./sidebar.php"); ?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2"></div>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8 offset-2">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Doctor</h3>
                </div>
                <div class="card-body">

                  <?php
                  // Assuming $con is your database connection
                  if (isset($_GET['id'])) {
                    $doctorId = $_GET['id'];
                    $qry = "SELECT * FROM user WHERE user_id = '$doctorId' AND user_type = 'Doctor'";
                    $result = mysqli_query($con, $qry);
                    if (mysqli_num_rows($result) > 0) {
                      $row = mysqli_fetch_assoc($result);
                      $user_id = $row['user_id'];
                      $user_name = $row['user_name'];
                      $user_email = $row['user_email'];
                      $phone = $row['phone'];
                      $address = $row['address']; 
                    } else {
                      echo "<script>alert('Doctor not found')</script>";
                    }
                  } else {
                    echo "<script>window.location='./viewDoctor.php'</script>";
                  }
                  ?>

                  <form role="form" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="user_id">Doctor ID</label>
                        <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Doctor ID" readonly value="<?php echo $user_id; ?>">
                      </div>
                      <div class="form-group">
                        <label for="user_name">Name</label>
                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Name" required value="<?php echo $user_name; ?>">
                      </div>
                      <div class="form-group">
                        <label for="user_email">Email</label>
                        <input type="email" class="form-control" name="user_email" id="user_email" placeholder="xyz@gmail.com" required value="<?php echo $user_email; ?>">
                      </div>
                      <div class="form-group">
                        <label for="user_phone">Phone No</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" required value="<?php echo $phone; ?>">
                      </div>
                      <div class="form-group">
                        <label for="user_address">Address</label>
                        <textarea class="form-control" id="address" name="address" placeholder="Enter Doctor's Address" rows="3"><?php echo $address; ?></textarea>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" name="update">Update</button>
                    </div>
                  </form>

                  <?php
                  if (isset($_POST['update'])) {
                    $user_id = $_POST['user_id'];
                    $user_name = $_POST['user_name'];
                    $user_email = $_POST['user_email'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];

                    $qry = "UPDATE user SET user_name = '$user_name', user_email = '$user_email', phone = '$phone', address = '$address' WHERE user_id = '$doctorId'";

                    if (mysqli_query($con, $qry)) {
                      echo "<script>
                        alert('Doctor Updated');
                        window.location='./viewDoctor.php';
                      </script>";
                    } else {
                      echo "<script>alert('Error')</script>";
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>

<?php include("./footer.php"); ?>
