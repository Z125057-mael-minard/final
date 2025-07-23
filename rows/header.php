<div id="header" class="header_container">
    <div class="container-fluid">
        <div class="big_header justify-content-evenly">
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
    <div class="mobile_header justify-content-evenly">
        <a class="icon_home" href="index.php">
            <img src="imgs/icons/shop.png" alt="Home">
        </a>
        <a class="icon_cart" href="shopping_cart.php">
            <img src="imgs/icons/shopping-cart.png" alt="Cart">
        </a>

        <?php

        if ($_SESSION['logged_in']) {
            echo '<a class="icon_account" href="account.php">
                      <img src="imgs/icons/user.png" alt="Account">
                  </a>';
            echo '<a class="icon_logout" href="php_scripts/logout_user.php">
                      <img src="imgs/icons/logout.png" alt="Logout">
                  </a>';
        }
        else {
            echo '<a class="icon_login" href="login.php">
                      <img src="imgs/icons/login.png" alt="Login">
                  </a>';
        }
        ?>
    </div>
</div>