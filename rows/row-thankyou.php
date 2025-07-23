<?php
$shipping_name = $_GET['name'];
$orderId = $_GET['orderId'];
?>

<div class="container">
    <div class="container-fluid">
        <div id="thank_you" class="thankyou_disk_container">
            <div class="thankyou-container">
                <p>Thank you <?php echo($shipping_name) ?> for your order!</p>
                <p>Your order number is: <?php echo($orderId) ?></p>
                <a href="index.php">Go to home page</a>
            </div>
        </div>
    </div>
</div>