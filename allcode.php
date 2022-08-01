<?php
session_start();
// include('message.php');

if(isset($_POST['logout_btn']))
{
    // session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']) ; 
    unset($_SESSION['auth_user']) ;
    // exit out with a message
    $_SESSION['message'] = "Logged Out Successfully";
    $_SESSION['message_code'] = "success";
    header("Location: login.php");
    exit(0);
}

include('admin/config/dbcon.php');

if(isset($_POST['apply_leave']))//apply leave
{
  $fullname = $_POST['fullname'];
  $email =$_POST['email'];
  $gender =$_POST['gender'];
  $department =$_POST['department'];
  $leave_type =$_POST['leave_type'];
  $description =$_POST['description'];
  $leave_from =date('Y-m-d',strtotime($_POST['leave_from']));
  $leave_to =date('Y-m-d',strtotime($_POST['leave_to']));


    // if($gender == 'Male')
    // {
    //         //  check Email
    //         $currentgender =$_SESSION['auth_user']['user_gender']  ;
    //         $query = "SELECT * FROM users WHERE gender = '$currentgender' ";
    //         $query_run = mysqli_query($con,$query);
            
    //         {
    //             // Email Already  Exists
    //             $_SESSION['message'] = "Your Dates are Wrong!";
    //             header("Location: applyleave.php");
    //             exit(0);
    //         }
    //         else
    //        {

    
        //  check Email
        // $today = date("Y-m-d");
        // $expire = date("leave_from ");//from database

        // $query = "SELECT * FROM apply_leave WHERE leave_from = '$expire' ";
        // $query_run = mysqli_query($con,$query);

        // $today_time = strtotime($today);
        // $expire_time = strtotime($expire);

        // if ($expire_time < $today_time) 
        //       { /* do Something */ 
        //         $_SESSION['message'] = "Your Dates are Wrong!";
        //         header("Location: applyleave.php");
        //         exit(0);
        //       }
      //           else
      //  {
  
  $query = "INSERT INTO apply_leave (fullname,email,gender, department ,leave_type,description ,leave_from,leave_to ) 
             VALUES ('$fullname', '$email','$gender','$department','$leave_type', '$description','$leave_from','$leave_to'  )";
  $query_run = mysqli_query($con,$query);



  if($query_run)
  {
    $_SESSION['message'] = "Application successful!";
    $_SESSION['message_code'] = "success";
    header("Location: leavestatus.php");
    exit(0);
  }
  else
  {
    $_SESSION['message'] = "something went wrong!";
    $_SESSION['message_code'] = "error";
    header("Location: applyleave.php");
    exit(0);
  }
}
 
 
?>