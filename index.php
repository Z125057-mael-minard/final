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
    <title>E-Commerce</title>

</head>
<body style="overflow-x: hidden">

<?php
    require "rows/head.php";

    require "rows/header.php";

    require "rows/row-index.php";

    require "rows/footer.php";
?>
</body>
</html>

<script src="javascript/background_styling.js" onload="set_disks()"></script>
<script src="javascript/header_scroll.js"></script>