<?php include("./header.php"); ?>
<?php include("./sidebar.php"); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">All Appointments</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Appointments List</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Appointment ID</th>
                                        <th class="text-center">Patient Name</th>
                                        <th class="text-center">Patient Email</th>
                                        <th class="text-center">Patient Phone</th>
                                        <th class="text-center">Appointment Time</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $qry = "SELECT a.appoitment_id, u.user_name, u.user_email, u.phone, a.appoitment_time, a.appoitment_status
                                            FROM appoitments a
                                            INNER JOIN user u ON a.fk_patient_id = u.user_id";
                                    $result = mysqli_query($con, $qry);
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <tr>
                                            <td class="text-center"><?php echo $row['appoitment_id']; ?></td>
                                            <td class="text-center"><?php echo $row['user_name']; ?></td>
                                            <td class="text-center"><?php echo $row['user_email']; ?></td>
                                            <td class="text-center"><?php echo $row['phone']; ?></td>
                                            <td class="text-center"><?php echo $row['appoitment_time']; ?></td>
                                            <td class="text-center"><?php echo $row['appoitment_status']; ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include("./footer.php"); ?>
