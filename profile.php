<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('admin/config/dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style type= "text/css">
          .wrapper
        {
            width:500px;
            margin: 0 auto;
            color:white;
        }
    </style>
</head>
<body style="background-color:#004528">
    <div class="container">
        <form action="" method="post">
            <button class="btn btn-info" style="float:right; width:70px; height:70px;" name="submit">Edit</button>
        </form>
        <div class="wrapper">
            <?php 
            $query = mysqli_query($con,"SELECT * FROM users WHERE
          $_SESSION[auth_user] = [
                'user_id' => $user_id,
                'user_name' => $user_name,
                'user_email' => $user_email,
            ]';");
            ?>
            <h2 style="text-align:center;">Myprofile</h2>
            <?php
            $row = mysqli_fetch_assoc($query);
                echo "<div><img></div>";
            ?>
        </div>
    </div>
</body>
</html>

<?php
include('includes/footer.php');
?>