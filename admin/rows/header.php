<div class="container">
    <div class="container-fluid">
        <div class="admin_header-container d-flex justify-content-evenly">
            <a href="dashboard.php">Dashboard</a>
            <a href="add_product.php">Add product</a>
            <a href="orders.php">Orders</a>
            <?php
                if ($_SESSION['logged_in']) {
                    echo '<a href="../php_scripts/logout_user.php">Logout</a>';
                }
            ?>
        </div>
    </div>
</div>