
$_SESSION['message_code'] = "info";<?php
session_start();
include('admin/config/dbcon.php');

// if(isset($_SESSION['auth']))// prevents showing login page while loggedd in
// {
//     $_SESSION['message'] = "You are already Logged In";
//     header("Location:index.php");//..to home page
//     exit(0);
// }
if(isset($_POST['submit'])){
  
  $dpname=$_POST['dpname'];

  if($dpname == $dpname)
  {
      //  check Email
      $checkdpname = "SELECT dpname FROM department WHERE dpname = '$dpname'";
      $checkdpname_run = mysqli_query($con,$checkdpname);

      if(mysqli_num_rows($checkdpname_run) > 0)
      {
          // Email Already  Exists
          $_SESSION['message'] = "department Already Exists";
          $_SESSION['message_code'] = "info";
          header("Location: createdep.php");
          exit(0);
      }
      else
      {

  

  $query="INSERT INTO department (dpname)
  values('$dpname')";
    $query_run=mysqli_query($con,$query);
  if($query_run){
    
    $_SESSION['message'] = "Department Added success!";
    $_SESSION['message_code'] = "success";
    header("Location: createdep.php");
    exit(0);
     }
   }
  }
}
            

include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

           <?php include ('message.php'); ?>

              <div class="card">
                <div class="card-header">
                    <h4>Add Dept</h4>
                </div>
                   <div class="card-body">

                  

                <form  method="post">
                   <div class="form-group mb-3">
                           <label>Department Name</label>
                           <input required type="text" name="dpname" placeholder="Enter Department" class="form-control">
                       </div>
                       <div class="form-group mb-3">
                           <button type="submit" name="submit" class="btn btn-primary">Add</button>
                       </div>
                     </form>

                     </div>
                   </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>