<?php
require __DIR__ . '/../php_scripts/check_user.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>

    <?php
    require "rows/head.php";
    ?>

</head>
<body>
<?php
if ($is_admin == 1){
    require "rows/header.php";

    require "rows/row-orders.php";

    require "rows/footer.php";
}
else{
    echo 'You are not allowed to view this page.';
}
?>
</body>
</html>

<script src="../javascript/header_scroll.js"></script>
<script src="../javascript/admin_background_styling.js"></script>