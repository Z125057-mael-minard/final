<?php
    require "../db_connection.php";
    $order_id = $_GET['order_id'];

    $sql = "SELECT * FROM orders WHERE order_id = '$order_id'";
    $shipping_information = $db->query($sql)->fetch(PDO::FETCH_OBJ);

    $sql = "SELECT * FROM order_rows WHERE order_id = '$order_id'";
    $order_details = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container">
    <div class="container-fluid">
        <div class="order_detail-container">
            <div class="order_detail-container-shipping-info">
                <h3>Shipping Information</h3>
                <p><?php echo($shipping_information->order_id) ?></p>
                <p><?php echo($shipping_information->order_date) ?></p>
                <p><?php echo($shipping_information->order_country) ?></p>
                <p><?php echo($shipping_information->order_city) ?></p>
                <p><?php echo($shipping_information->order_street) ?></p>
                <p><?php echo($shipping_information->order_housenr) ?></p>
                <p><?php echo($shipping_information->order_name) ?></p>
            </div>
            <h3>Ordered Products</h3>
            <?php foreach($order_details as $order_detail): ?>
                <?php
                    $sql = "SELECT * FROM products AS prod JOIN categories AS cat ON prod.category_id = cat.category_id WHERE product_id = '$order_detail->product_id'";
                    $product_details = $db->query($sql)->fetch(PDO::FETCH_OBJ);
                ?>
                <div class="order_detail-container-row d-flex justify-content-evenly mb-4">
                    <p><?php echo($product_details->product_name); ?></p>
                    <p><?php echo($product_details->category_name); ?></p>
                    <p><?php echo($product_details->product_price); ?></p>
                    <p><?php echo($order_detail->order_product_amount); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>