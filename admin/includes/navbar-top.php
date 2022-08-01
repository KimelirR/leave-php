<nav class="sb-topnav navbar navbar-expand navbar-dark text-white bg-primary">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.php">Leave-Admin</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" /> -->
            <!-- <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> -->
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 ">
        <a class="nav-item" id="navbaritem" href="#">
            <?php ?> <button type="button" class="btn btn-primary">
                Notifications <span class="badge bg-secondary">
                    <?php
                    include('config/dbcon.php');
                    $query = "SELECT leave_status FROM apply_leave ORDER BY leave_id";
                    $query_run = mysqli_query($con, $query);

                    $row = mysqli_num_rows($query_run);

                    echo '<h6>' . $row . '</h6>';
                    

                    ?></span>
            </button> <?php ?>
        </a>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i><?= $_SESSION['auth_user']['user_name']  ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <!-- <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li> -->
                <li>
                <li>
                    <form action="../allcode.php" method="post">
                        <button class="dropdown-item" name="logout_btn" type="submit">Logout</button>
                    </form>
                </li>
        </li>
    </ul>
    </li>
    </ul>
</nav>