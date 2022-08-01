<?php    

include ('authentication.php');
include ('includes/header.php');
?>

<div class="container-fluid px-4">
   
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Leave Type</h4>
                         
                    </div>
                    <div class="card-body">
                    <form action="updateu.php" method="post">
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Leave Type</label>
                                        <input type="text" name="leave_type"  class="form-control" required>
                                    </div>
                             
                                    <div class="col-md-6 mb-3 pt-4">
                                        <button type="submit" name="add_ltype" class="btn btn-primary">Add LType</button>
                                        <a href="display_createltype.php" class="btn btn-danger float-end">Back</a>
                                    </div>
                                </div>
                            </form>

                    </div>
                </div>
            </div>
        </div>
 </div>
<?php
include ('includes/footer.php');
include ('includes/scripts.php');
?>