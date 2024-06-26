<header>
    <a href="<?php echo BASE_URL . "/index.php"?>" class="logo">
        <h1 class="logo-text">Scriblog</h1>
    </a>
    <i class="fa-solid fa-bars menu-toggle"></i>
    <ul class="nav">
        <li><a href="<?php echo BASE_URL . "/index.php"?>">Home</a></li>
        <li><a href="<?php echo BASE_URL . "/about.php"?>">About</a></li>

        <?php if (isset($_SESSION["id"])): ?>
            <li>
            <a href="#">
                <i class="fa-solid fa-user"></i>
                <?php echo $_SESSION["username"]; ?>
                <i class="fa-solid fa-chevron-down down-icon"></i>
            </a>
            <ul class="nav">
                <?php if($_SESSION["admin"]): ?>
                    <li><a href="<?php echo BASE_URL . "/admin/dashboard.php"?>">Dashboard</a></li>
                <?php endif; ?>
                <li><a href="<?php echo BASE_URL . "/logout.php"?>" class="logout">Log Out</a></li>
            </ul>
        </li>
        <?php else: ?>
            <li><a href="<?php echo BASE_URL . "/register.php"?>">Sign Up</a></li>
            <li><a href="<?php echo BASE_URL . "/login.php"?>">Login</a></li>
        <?php endif; ?>
    </ul>
</header>