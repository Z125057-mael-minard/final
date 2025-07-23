<div id="admin_header" class="header_container">
    <div class="container-fluid">
        <div class="big_header justify-content-evenly">
            <a href="dashboard.php">Dashboard</a>
            <a href="add_product.php">Add product</a>
            <a href="orders.php">Orders</a>
            <?php
            if ($_SESSION['logged_in']) {
                echo '<a href="../php_scripts/logout_user.php">Logout</a>';
            }
            ?>
        </div>
        <div class="mobile_header justify-content-evenly">
            <a href="dashboard.php">
                <img src="../imgs/icons/dashboard.png" alt="Dashboard">
            </a>
            <a href="add_product.php">
                <img src="../imgs/icons/add_product.png" alt="Add Product">
            </a>
            <a href="orders.php">
                <img src="../imgs/icons/orders.png" alt="Orders">
            </a>
            <?php
            if ($_SESSION['logged_in']) {
                echo '<a href="../php_scripts/logout_user.php">
                          <img src="../imgs/icons/logout.png" alt="Logout">
                      </a>';
            }
            ?>
        </div>
    </div>
</div>