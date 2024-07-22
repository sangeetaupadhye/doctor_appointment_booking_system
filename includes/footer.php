<?php

    $qry="select * from  clinic";
    $exc=mysqli_query($con,$qry);
    while($row=mysqli_fetch_array($exc)){
        $clinic_email=$row['clinic_email'];
        $clinic_address=$row['clinic_address'];
        $clinic_name=$row['clinic_name'];
        $clinic_time=$row['clinic_time'];
        $clinic_phone=$row['clinic_phone'];


    }
?>
<footer class="site-footer section-padding" id="contact">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 me-auto col-12">
                 
                        <h5 class="mb-lg-4 mb-3">Timing</h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex">

                                <?php  echo $clinic_time;?>
                            </li></ul>
                            <h5 class="mb-lg-4 mb-3">Email</h5>
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex">
                                <?php  echo $clinic_email;?></li>
                                <br>
                                 <h5 class="mb-lg-4 mb-3">Contact Number</h5>
                            <li class="list-group-item d-flex">
                                <?php  echo $clinic_phone;?></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 col-12 my-4 my-lg-0">
                        <h5 class="mb-lg-4 mb-3">Our Clinic</h5>

                     

                        <p><?php  echo $clinic_address;?></p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 ms-auto">
                        <h5 class="mb-lg-4 mb-2">Socials</h5>

                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>

                        
                    </div>

                   

                </div>
            </section>
        </footer>