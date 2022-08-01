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

            <?php include ('message.php'); ?>

                <div class="card shadow ">
                    <div class="card-header">
                        <!-- <h4>Registered Users</h4>
                        <a href="register_admin.php" class="btn btn-primary float-end">Add Admin</a> -->
                        <!-- <h4 class="box-title">Registered Users</h4>
						   <h6 class="box_title_link"><a href="register_admin.php">Add Employee</a> </h6> -->
                          
                          <h4 class="box-title">Registered Users
						      <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#AboutsModal">
                        <a class="text-white text-decoration-none" href="register_admin.php">ADD USER</a>
                        </button>
                        </h4>
                        </div>
                    <div class="card-body table-responsive">
              <table class="table table-bordered table-striped table-responsive">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Gender</th>
                          <th>Department</th>
                          <th>Email</th>
                          <th>Role_as</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php 
                      $query = "SELECT * FROM users";
                      $query_run =mysqli_query($con,$query);
                        // lets check if data available
                      if(mysqli_num_rows($query_run)>0)
                      {
                        foreach($query_run as $row) 
                        {
                            // lets divide php
                            ?> 
                            <tr>
                                <td><?= $row['id']; ?></td>
                                <td><?= $row['fname']; ?></td>
                                <td><?= $row['lname']; ?></td>
                                <td><?= $row['gender']; ?></td>
                                <td><?= $row['department']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td>
                                     <?php 
                                     if($row['role_as'] == '1')
                                     {
                                       echo 'Admin';  
                                     }
                                     elseif($row['role_as'] == '0')
                                    {
                                        echo 'User';
                                    }
                                     ?>
                                </td>
                                <!-- sending fetched id -->
                                <td><a href="register_edit.php?id=<?= $row['id'];?>" class="btn btn-success">Edit</a></td>
                                <td>
                                   <form action="codeu.php" method="post"> 
                                
                                <button type="submit"  name= "delete_user" value = "<?=$row['id'];?> " class="btn btn-danger">Delete</button></td>
                                </form>
                            </tr>
                            <?php
                        }  
                      }   
                      else
                      {
                      ?>
                      <tr>
                        <td colspan="6"> No Record Found</td>

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
<?php
include ('includes/footer.php');
include ('includes/scripts.php');
?>