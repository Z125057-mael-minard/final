<div id="header" class="header_container">
    <div class="container-fluid">
        <div class="d-flex justify-content-evenly">
            <a class="icon_home" href="index.php">Home</a>
            <a class="icon_cart" href="shopping_cart.php">Cart</a>
      <?php

      if ($_SESSION['logged_in']) {
        echo '<a class="icon_account" href="account.php">Account</a>';
        echo '<a class="icon_logout" href="php_scripts/logout_user.php">Logout</a>';
      }
      else {
        echo '<a class="icon_login" href="login.php">Login</a>';
      }
      ?>
        </div>
    </div>
</div>