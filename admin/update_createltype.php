<?php    

include ('authentication.php');
include ('includes/header.php');








?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Users</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item ">Users</li>
    </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Update LType</h4>
                    </div>
                    <div class="card-body">
                        
                    <?php
                        if(isset($_GET['id']))
                        {
                           $user_id = $_GET['id'];
                           $users = "SELECT * FROM leave_type WHERE id = '$user_id'";
                           $users_run = mysqli_query($con,$users);

                           if(mysqli_num_rows($users_run) >0)
                           {
                            foreach($users_run as $user)
                            {
                                ?>
                             
                             
                             
                            <form action="updateu.php" method="post">
                                <input type="hidden" name="user_id" value="<?=$user['id'];?>"> 
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Leave Type</label>
                                        <input type="text" name="leave_type" value="<?=$user['leave_type'];?>"  class="form-control">
                                    </div>
                              
                                    <div class="col-md-6 mb-3 pt-4">
                                        <button type="submit" name="update_ltype" class="btn btn-primary align-center">Update LType</button>
                                        <a href="display_createltype.php" class="btn btn-danger float-end">Back</a>
                                    </div>
                                </div>
                            </form>

                            <?php
                            }
                            
                           }
                           else
                           {
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
include ('includes/footer.php');
include ('includes/scripts.php');
?>