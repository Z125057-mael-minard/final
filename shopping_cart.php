<?php
require('php_scripts/check_user.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoopingcart</title>

    <?php
    require "rows/head.php";
    ?>

</head>
<body>
<?php
require "rows/header.php";

if ($_SESSION["shopping_cart"]){
  require "rows/row-shopping_cart.php";
} else {
  echo '<h3 class="empty-cart-msg">No products in cart! Let\'s <a href="index.php">add some</a>.</div>';
}

require "rows/footer.php";
?>
</body>
</html>

<script src="javascript/background_styling.js"></script>
