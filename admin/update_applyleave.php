<?php

include('authentication.php');
include('includes/header.php');








?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Status</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item ">Applied Leaves</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update Status</h4>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['leave_id'])) {
                        $leave_id = $_GET['leave_id'];
                        $users = "SELECT * FROM apply_leave WHERE leave_id = '$leave_id'";
                        $users_run = mysqli_query($con, $users);

                        if (mysqli_num_rows($users_run) > 0) {
                            foreach ($users_run as $row) {
                    ?>



                                <form action="updateu.php" method="post">
                                    <input type="hidden" name="leave_id" value="<?= $row['leave_id']; ?>">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label>Leave Status</label>
                                            <?php
                                            ?>
                                            <select name="leave_status" class="form-control" onchange="update_leave_status('<?php echo $row['leave_id'] ?>',this.options[this.selectedIndex].value)">
                                                <option value="0">--Update status--</option>
                                                <!-- if value is 1 then accepted/approved -->
                                                <option value="1"> Accepted already</option>
                                                <!-- if value is 2 then Rejected -->
                                                <option value="2"> Rejected</option>
                                            </select>


                                            <?php

                                            ?>
                                        </div>

                                        <div class="col-md-6 mb-3 pt-4">
                                            <button type="submit" name="update_status" class="btn btn-primary align-center">Update</button>
                                            <a href="display_applyleave.php" class="btn btn-danger float-end">Back</a>
                                        </div>
                                    </div>
                                </form>
                            <?php
                            }
                        } else {
                            ?>
                            <h4>No Record Found</h4>
                    <?php
                        }
                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>