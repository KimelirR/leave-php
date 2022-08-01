 <?php
include ('config/dbcon.php');

session_start();
if(!isset($_SESSION['auth']))
{
    $_SESSION['message'] = "Login to access dashboard";
    // header("Location:../login.php");//..to move one step back
    header("Location:../login.php");
    exit(0);
}
else
{
   if($_SESSION['auth_role'] != "1")
   {
    $_SESSION['message'] = "You are not authorized ADMIN";
    header("Location:../login.php");//..to move one step back
    exit(0);  
   }
  
}



?>