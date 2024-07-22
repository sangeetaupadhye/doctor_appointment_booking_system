<?php
    include "./left_nav.php";
?>
<?php
    if(isset($_GET['appoitment_id'])){
        $appoitment_id = $_GET['appoitment_id'];

        $qry = "SELECT * from user u,appoitments ap
                WHERE ap.appoitment_id ='$appoitment_id'
                and u.user_type='Patient' ";
        $exc= mysqli_query($con,$qry);
        while($row = mysqli_fetch_array($exc)){
            $appoitment_id =$row['appoitment_id'];
            $appoitment_time=$row['appoitment_time'];
            $appoitment_status=$row['appoitment_status'];
            $message=$row['message'];
            $user_email=$row['user_email'];
            $user_name=$row['user_name'];
            $phone=$row['phone'];
            $user_status=$row['user_status'];


        }
    }
?>
    <div class="col-12 ">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header h3">Appointment Details</div>
                            <div class="card-body">
                                
                                <div class="row ">
                                <table id="example" class="display table table-bordered col-12  border border-info" >
                                    <tr>
                                        <th colspan="3" class="bg-dark text-light text-center">Appointment Details</th>
                                    </tr>
                                    <tr>
                                        <th class=""> Appointment Id</th>
                                        <th>Appointment Status</th>
                                        <th>Appointment Time</th>
                                    </tr> 
                                    <tr>
                                        <td>PATIENT-<?php echo  $appoitment_id ?></td>
                                        <td><?php echo  $appoitment_status ?></td>
                                        <td><?php echo  $appoitment_time ?></td>
                                    </tr>

                                    <tr>
                                        <th colspan="3" class="bg-dark text-light text-center">Patient Details</th>
                                    </tr>
                                 
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Patient Email</th>
                                        <th>Patient Phone</th>
                                    </tr> 
                                    <tr>
                                        <td><?php echo  $user_name ?></td>
                                        <td><?php echo  $user_email ?></td>
                                        <td><?php echo  $phone ?></td>
                                    </tr>
                                  
                                    <tr colspan="">
                                        <th colspan="1" class="text-center bg-dark text-light"> Note for Doctor</th>
                                        <td colspan="2"> <?php echo  $message ?></td>
                                    </tr>

                                    <?php 
                                    
                                        if($appoitment_status == "Scheduled"){
                                            ?>

                                           
                                    <tr>
                                        <td></td>
                                        <td colspan="" class="text-center">
                                            <a href="./viewAppointmentDetails.php?appoitment_status=Accepted&appoitment_id=<?php echo $appoitment_id ?>" class="btn btn-success">Accept</a>
                                        </td>
                                        <td colspan="" class="text-center">
                                            <a href="./viewAppointmentDetails.php?appoitment_status=Cancelled&appoitment_id=<?php echo $appoitment_id ?>" class="btn btn-danger">Cancell</a>

                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                    
                                </table>
                                </div>
                            </div>
                        </div>
                        <br>
                      
                       
                    </div>
                 
                </div>
    </div>

    <?php
    
            //acept app
            if(isset($_GET['appoitment_status'])){
                $appoitment_id = $_GET['appoitment_id'];
                $appoitment_status = $_GET['appoitment_status'];

                $qry = "UPDATE `appoitments` SET appoitment_status='$appoitment_status'  where appoitment_id='$appoitment_id'";
                $exc=mysqli_query($con,$qry);
                if($exc){
                    echo "<script>alert('Appointment $appoitment_status')
                                    location = './viewAllAppointment.php'</script>";
                }

            }
    ?>
    <script>
        $(document).ready(function () {
        $('#example').DataTable();
    });
    </script>
   
<?php 
    include "./footer.php";
?>