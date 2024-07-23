 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link" style="font-weight:bold; font-size:22px;">
    

      <span class="brand-text font-weight-light">DMS | Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/download.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">

          <a href="admin-profile.php" class="d-block">Welcome : </a>
         
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            
          <li class="nav-item">
            <a href="./dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               </p>
            </a>
        
          </li>
          
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./add_category.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Doctor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_category.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Patient</p>
                </a>
              </li>
             </ul>
          </li> -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Appointment
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="allAppointments.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All  Appointments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pendingAppointment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Appointments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="acceptedAppointment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accepted Appointments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="rejectedAppointment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rejected Appointments</p>
                </a>
              </li>
            </ul>
          </li>
         
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
              Patient
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_property.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Patient</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_property.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Patient </p>
                </a>
              </li>
             </ul>
          </li> -->
           
          <li class="nav-item">
            <a href="clinic_details.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Clinic Details
               </p>
            </a>
        
          </li>
          <li class="nav-item">
            <a href="view_user.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
               </p>
            </a>
        
          </li>
          <li class="nav-item">
            <a href="viewDoctor.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Doctors
               </p>
            </a>
        
          </li>
        
          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>
                Admin Setting
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
           
              </li>
              <li class="nav-item">
                <a href="./logout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
             </ul>
          </li>   -->

       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>