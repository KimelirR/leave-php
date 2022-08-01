<!-- <div>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <img src="assets/images/category-leave.jpg" class="w-100 " alt="Leave Management">
      </div>
      <div class="col-md-9">

      </div>
    </div>
  </div>
</div> -->

<header class="sticky-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
      <a class="navbar-brand" href="#">Leave Application Website</a>
      <!-- they shoud be placed on a class above-d-block d-sm-none d-md-none -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="abouts.php">About Us</a>
          </li>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <!-- Showing who is logged in instead of Dropdown -->
              Departments
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <!-- <li><a class="dropdown-item" href="#">HR Department</a></li>
            <li><a class="dropdown-item" href="#">ICT Department</a></li>
            <li><a class="dropdown-item" href="#">Finance Department</a></li> -->
              <li><a class="dropdown-item" href="#">
                  <?php
                  include('admin/config/dbcon.php');

                  $query = "select * from department order by dpname desc";
                  $query_run = mysqli_query($con, $query);
                  while ($row = mysqli_fetch_assoc($query_run)) {
                    echo "<option value=" . $row['dpname'] . ">" . $row['dpname'] . "</option>";
                  }
                  ?>
                </a></li>

            </ul>
          </li>

          <?php if (isset($_SESSION['auth_user'])) : ?>

            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <!-- Showing who is logged in instead of Dropdown -->
                Leave Application
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="applyleave.php">Apply Leave</a>
                <li>
                <li><a class="dropdown-item" href="leavestatus.php">Leave Status</a>
                <li>
              </ul>

            </li>

            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <!-- Showing who is logged in instead of Dropdown -->
                <?= $_SESSION['auth_user']['user_name']  ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">My Profile</a></li>
                <li>
                  <form action="allcode.php" method="post">
                    <button class="dropdown-item" name="logout_btn" type="submit">Logout</button>
                  </form>
                </li>  
              </ul>

            </li>


          <?php else : ?>

            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>

          <?php endif; ?>

        </ul>

      </div>
    </div>
  </nav>