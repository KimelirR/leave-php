<?php
    
include ('authentication.php');

if(isset($_POST['delete_dept']))
{
  $user_id = $_POST['delete_dept'];

  $query = "DELETE FROM department WHERE id = $user_id ";// Delete departnent
  $query_run = mysqli_query($con,$query);

  if($query_run)
  {
    $_SESSION['message'] = "Deleted Successfully";
    header ("Location: display_createdep.php");
    exit(0);
  }
}

if(isset($_POST['delete_ltype']))
{
  $user_id = $_POST['delete_ltype'];

  $query = "DELETE FROM leave_type WHERE id = $user_id ";// Delete leave type
  $query_run = mysqli_query($con,$query);

  if($query_run)
  {
    $_SESSION['message'] = "Deleted Successfully";
    header ("Location: display_createltype.php");
    exit(0);
  }
}

if(isset($_POST['add_dept']))
{
  $dpname = $_POST['dpname'];


 
  $query="INSERT INTO department (dpname)
  values('$dpname')";
    $query_run=mysqli_query($con,$query);
  if($query_run){
    
    $_SESSION['message'] = "Department Added success!";
    header("Location: display_createdep.php");
    exit(0);
     }

  else
  {
    $_SESSION['message'] = "Something went wrong!";
    header ("Location: display_createdep.php");
    exit(0); 
  }

}


if(isset($_POST['update_dept']))
{
    $user_id = $_POST['user_id'];//department
    $dpname = $_POST['dpname'];
    


    $query = "UPDATE department SET dpname='$dpname' 
                 WHERE id = '$user_id' ";

         $query_run = mysqli_query($con,$query);
     
    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location:display_createdep.php ");
        exit(0);
    }
  }
  

  if(isset($_POST['update_ltype']))
{
    $user_id = $_POST['user_id'];//update leave_type
    $leave_type = $_POST['leave_type'];
    


    $query = "UPDATE leave_type SET leave_type='$leave_type' 
                 WHERE id = '$user_id' ";

         $query_run = mysqli_query($con,$query);
     
    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location:display_createltype.php ");
        exit(0);
    }
  }
  
  if(isset($_POST['add_ltype']))
{
  $leave_type = $_POST['leave_type'];


 
  $query="INSERT INTO leave_type (leave_type) 
  values('$leave_type')";
    $query_run=mysqli_query($con,$query);//add ltype
  if($query_run){
    
    $_SESSION['message'] = "Leave Type Added success!";
    header("Location: display_createltype.php");
    exit(0);
     }

  else
  {
    $_SESSION['message'] = "Something went wrong!";
    header ("Location: display_createltype.php");
    exit(0); 
  }

}
  
  if(isset($_POST['update_status']))
{
    $leave_id = $_POST['leave_id'];
    $leave_status = $_POST['leave_status'];
    


    $query = "UPDATE apply_leave SET leave_status='$leave_status' 
                 WHERE leave_id = '$leave_id' ";

         $query_run = mysqli_query($con,$query);
     
    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location:display_applyleave.php ");
        exit(0);
    }
  }



  // if(isset($_POST['delete_leave']))
  // {
  //   $leave_id = $_POST['delete_leave'];
  
  //   $query = "DELETE FROM apply_leave WHERE leave_id = $leave_id ";// Delete leave
  //   $query_run = mysqli_query($con,$query);
  
  //   if($query_run)
  //   {
  //     $_SESSION['message'] = "Deleted Successfully";
  //     header ("Location: display_applyleave.php");
  //     exit(0);
  //   }
  // }

?>