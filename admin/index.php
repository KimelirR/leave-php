<?php    

include ('authentication.php');
include ('includes/header.php');
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">ADMIN PANEL</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
     <?php include('message.php') ?>
        <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Total Employees</div>
                <div class="card-footer d-flex align-items-center justify-content-start">
                <h1>
                        <?php
                        include ('config/dbcon.php');
                        $query = "SELECT id FROM users ORDER BY id";
                        $query_run = mysqli_query($con,$query);

                        $row = mysqli_num_rows($query_run);

                        echo'<h1>'.$row.'</h1>';

                        ?>
                  </h1>
                    <div class="small text-white"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-dark mb-4">
                <div class="card-body">Total Departments</div>
                <div class="card-footer d-flex align-items-center justify-content-start">
                <h1>
                        <?php
                        include ('config/dbcon.php');
                        $query = "SELECT id FROM department ORDER BY id";
                        $query_run = mysqli_query($con,$query);

                        $row = mysqli_num_rows($query_run);

                        echo'<h1>'.$row.'</h1>';

                        ?>
                  </h1>
                    <div class="small text-white"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Applied leave</div>
                <div class="card-footer d-flex align-items-center justify-content-start">
                      <h1>
                        <?php
                        include ('config/dbcon.php');
                        $query = "SELECT leave_id FROM apply_leave ORDER BY Leave_id";
                        $query_run = mysqli_query($con,$query);

                        $row = mysqli_num_rows($query_run);

                        echo'<h1>'.$row.'</h1>';

                        ?>
                      </h1>
                    <div class="small text-white"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-dark mb-4">
                <div class="card-body">Total Leave Types</div>
                <div class="card-footer d-flex align-items-center justify-content-start">
                      <h1>
                      <?php
                        include ('config/dbcon.php');
                        $query = "SELECT id FROM leave_type ORDER BY id";
                        $query_run = mysqli_query($con,$query);

                        $row = mysqli_num_rows($query_run);

                        echo'<h1>'.$row.'</h1>';

                        ?>
                      </h1>
                    <div class="small text-white"></div>
                </div>
            </div>
        </div>
    </div>
 </div>
<?php
include ('includes/footer.php');
include ('includes/scripts.php');
?>