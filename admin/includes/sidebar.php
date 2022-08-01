<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">MENU</div>

                <a class="nav-link" href="index.php">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
                <a class="nav-link" href="view_register.php">   
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Employees
                </a>

                <a class="nav-link" href="display_createdep.php">   
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Departments
                </a>

                <a class="nav-link" href="display_applyleave.php">   
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Applied Leaves
                </a>
                <a class="nav-link" href="display_createltype.php">   
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Leave Types
                </a>

        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php  if(isset($_SESSION['auth_user'])) : ?>
                <?= $_SESSION['auth_user']['user_name']  ?>
                <?php  endif ; ?>

        </div>
    </nav>
</div>