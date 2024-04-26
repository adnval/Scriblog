<header>
    <a href="<?php echo BASE_URL . "/index.php"?>" class="logo">
        <h1 class="logo-text">Scriblog</h1>
    </a>
    <i class="fa-solid fa-bars menu-toggle"></i>
    <ul class="nav">
        <?php if (isset($_SESSION["id"])): ?>
            <li>
                <a href="#">
                    <i class="fa-solid fa-user"></i>
                    <?php echo $_SESSION["username"]; ?>
                    <i class="fa-solid fa-chevron-down down-icon"></i>
                </a>
                <ul class="nav">
                    <li><a href="<?php echo BASE_URL . "/logout.php" ?>" class="logout">Log Out</a></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</header>