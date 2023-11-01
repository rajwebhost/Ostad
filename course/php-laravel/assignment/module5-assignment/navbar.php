    <!-- Navbar -->
    <div class="m-4">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand"><?php echo $role;?> Dashboard</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link">Home</a>
                    </li>
					<?php if($role == 'Admin') { ?>
                    <li class="nav-item">
                        <a href="role.php" class="nav-link">Role Management</a>
                    </li>
					<?php } ?>

					<li class="nav-item">
                        <a href="profile.php" class="nav-link">Profile</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Hello, <?php if(isset($user)) {echo $user;} ?></a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="profile.php" class="dropdown-item">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a href="logout.php" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>    
</div>