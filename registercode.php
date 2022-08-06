<?php
session_start();
include('admin/config/dbcon.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function sendemail_verify($fname,$lname,$email,$verify_token)
{
  $mail = new PHPMailer(true);

  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail->isSMTP();
  $mail->SMTPAuth   = true;  

  $mail->Host       = "smtp.gmail.com";                                             
  $mail->Username   = "leavemanagement254@gmail.com";                     //SMTP username
  $mail->Password   = "xjssirazbecywkjg ";// Alloweduser254
                              
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            
  $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  //xjssirazbecywkjg
  //Recipients
  
  $mail->setFrom( "leavemanagement254@gmail.com",$fname.''.$lname);
  $mail->addAddress($email);     //Add a recipient
  
   //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = "Email Verification from Leave_Management System";

  $mail_template  = "
  <h2> You have registered with Leave_management System</h2>
  <h5> Verify your email address to Login with the given link below</h5>
  <br/><br/>
 
  <a href= 'http://leave-manage-system.herokuapp.com/verify_email.php?token=$verify_token'> Click me</a>
  ";
 //Local <a href= 'http://localhost/leave_blog/verify_email.php?token=$verify_token'> Click me</a>
  $mail->Body    = $mail_template;
  $mail->send();
  // echo 'Message has been sent';
}

if(isset($_POST['submit']))
{
  $fname = mysqli_real_escape_string($con,$_POST['fname']);
  $lname =mysqli_real_escape_string($con,$_POST['lname']);
  $gender =mysqli_real_escape_string($con,$_POST['gender']);
  $department =mysqli_real_escape_string($con,$_POST['department']);
  $email =mysqli_real_escape_string($con,$_POST['email']);
  $password =mysqli_real_escape_string($con,$_POST['password']);
  $cpassword =mysqli_real_escape_string($con,$_POST['cpassword']);
  $verify_token = md5(rand()); //integers and random alphabets

  // sendemail_verify("$fname","$lname","$email","$verify_token");
  // echo 'Message sent or not?';
  
  if($password == $cpassword)
    {
        //  check Email
        $checkemail = "SELECT email FROM users WHERE email = '$email'";
        $checkemail_run = mysqli_query($con,$checkemail);

        if(mysqli_num_rows($checkemail_run) > 0)
        {
            // Email Already  Exists
            $_SESSION['message'] = "Email Already Exists";
            $_SESSION['message_code'] = "error";
            header("Location: register.php");
            exit(0);
        }
        else
       {
           $user_query = "INSERT INTO users (fname,lname,gender,department,email, password,verify_token)  
           VALUES('$fname','$lname','$gender','$department','$email','$password','$verify_token' )";
           $user_query_run = mysqli_query($con,$user_query);

           if($user_query_run)
           {
            sendemail_verify("$fname","$lname","$email","$verify_token");
            $_SESSION['message'] = "Registered successfully! Please verify your Email address to login!";
            $_SESSION['message_code'] = "success";
            header("Location: login.php");
            exit(0);
           }
           else
           {
            $_SESSION['message'] = "Something went wrong!";
            $_SESSION['message_code'] = "info";
            header("Location: register.php"); 
            exit(0);
           }
       }
    }
    else
    {
        $_SESSION['message'] = "Password and Confirm Password does not match";
        $_SESSION['message_code'] = "error";
        header("Location: register.php");
  exit(0);   
    }
}
else
{
  header("Location: register.php");
  exit(0);  
}

?>