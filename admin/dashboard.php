<?php
require __DIR__ . '/../php_scripts/check_admin.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce</title>

    <?php
    require "rows/head.php";
    ?>

</head>
<body>
<?php
if ($admin == 1){
  require "rows/header.php";
  
  require "rows/row-dashboard.php";
  
  require "rows/footer.php";
}
else{
  echo 'You are not allowed to view this page.';
}
?>
</body>
</html>
