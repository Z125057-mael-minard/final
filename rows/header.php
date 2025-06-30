<div class="container">
    <div class="container-fluid">
        <div class="header_container d-flex justify-content-evenly">
            <a href="index.php">Home</a>
            <a href="shopping_cart.php">Cart</a>
      <?php

      if ($_SESSION['logged_in']) {
        echo '<a href="account.php">Account</a>';
        echo '<a href="php_scripts/logout_user.php">Logout</a>';
      }
      else {
        echo '<a href="login.php">Login</a>';
      }
      ?>
        </div>
    </div>
</div>
