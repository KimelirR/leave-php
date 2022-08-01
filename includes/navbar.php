
    <!-- Navbar Section -->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="assets/images/leave2-logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="abouts.php">ABOUT US</a>
                        </li>
                    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                DEPARTMENTS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    LEAVE Application
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="applyleave.php">Apply Leave</a>
                                    <li>
                                    <li><a class="dropdown-item" href="leavestatus.php">Leave Status</a>
                                    <li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <a class="nav-link" href="login.php">LOGIN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="register.php">REGISTER</a>
                            </li>

                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
   