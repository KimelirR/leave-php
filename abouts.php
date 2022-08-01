<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');

?>

<div class="py-5">
    <div class="container py-5 shadow">
        

            <?php include('message.php');?>

                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                          <div class="card">
                           <img  src="assets/images/leave2.jpg " class="card-img-top" alt="Leave image" height="400px"  >
                            <div class="card-body">
                                <h5 class="card-title">About Us</h5>
                                <p1 class="card-text">We ensure that paper work is limited to save time and resources. You can apply your leave wherever you are with easy application.</p1> 
                            </div>
                            </div>
                            </div>
                                    
                            <div class="col-md-6">
                          <div class="card">
                           <img  src="assets/images/leave3.jpg "  class="card-img-top" alt="Leave image" height="400px"  >
                            <div class="card-body">
                                <h5 class="card-title">Notice!</h5>
                               <strong> <p1 class="card-text">Ensure you apply atleast 30days  before commencement of Leave for both Anual and Maternity Leaves.</p1></strong> 
                            </div>
                            </div>
                            </div>

                    </div>
                </div>
                
                
                 <!-- <button class="btn btn-primary">Login</button> -->
            </div>
        </div>
 

<?php
include('includes/footer.php');
?>