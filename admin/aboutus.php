<?php    

include ('authentication.php');
include ('includes/header.php');
?>



<!-- Modal -->
<div class="modal fade" id="AboutsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">About Us</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

         <form action="codeabt.php" method="post">
             
            <div class="form-group">
                <label for="" required>Title</label>
                <input type="text" name="title"  class="form-control" placeholder="Enter Title" required>
            </div>
            <div class="form-group">
                <label for="">Sub Title</label>
                <input type="text" name="subtitle" class="form-control" placeholder="Enter Sub Title " required>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea type="text" name="description" class="form-control" placeholder="Enter Description " required></textarea>
            </div>
            <div class="form-group">
                <label for="">Links</label>
                <input type="text" name="links" class="form-control" placeholder="Enter Links " required>
            </div>
         </form>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="abouts_save" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="py-5">
<div class="container-fluid px-4">

            <?php include ('message.php'); ?>

                <div class="card shadow ">
                    <div class="card-header">
                        <!-- <h4>Registered Users</h4>
                        <a href="register_admin.php" class="btn btn-primary float-end">Add Admin</a> -->
                        <h4 class="box-title">About Us
						   <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AboutsModal">
                        <a class="text-white text-decoration-none" href="#">ADD</a> 
                        </button>
                        </h4>
                          </div>
                    <div class="card-body">
              <table class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Title</th>
                          <th>Sub Title</th>
                          <th>Description</th>
                          <th>Links</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
                  </thead>
                  <tbody>
                            <tr>
                                <td>1</td>
                                <td>About Online Leave Aplication</td>
                                <td>How to apply online</td>
                                <td>Description</td>
                                <td>ww.abouts.coms</td>
                            
                                
                                <td>
                                    <a href="register_edit.php" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                   <form action="codeu.php" method="post"> 
                                
                                <button type="submit"  name= "delete_user" class="btn btn-danger">Delete</button></td>
                                </form>
                            </tr>
                   
                    
                  </tbody>
              </table>
                    </div>
                </div>
            </div>
        </div>
            





 








<?php
include ('includes/footer.php');
include ('includes/scripts.php');
?>