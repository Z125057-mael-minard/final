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
    <title>Product Detail</title>

    <?php
    require "rows/head.php";
    ?>

</head>
<body>
<?php
require "rows/header.php";

require "rows/row-product_detail.php";

require "rows/footer.php";
?>
</body>
</html>

<script src="javascript/background_styling.js"></script>