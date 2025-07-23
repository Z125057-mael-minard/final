<?php
    require "../db_connection.php";
    $order_id = $_GET['order_id'];

    $sql = "SELECT * FROM orders WHERE order_id = '$order_id'";
    $shipping_information = $db->query($sql)->fetch(PDO::FETCH_OBJ);

    $sql = "SELECT * FROM order_rows WHERE order_id = '$order_id'";
    $order_details = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);

    $sql = "SELECT * FROM order_status";
    $order_statuses = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container">
    <div class="container-fluid">
        <div class="order_detail-container">
            <h2 class="admin_h2">Order Detail</h2>
            <div class="order_detail-container-shipping-info">
                <p>Order status:</p>
                <select name="" id="">
                    <?php foreach ($order_statuses as $order_status): ?>
                        <option value="<?php echo($order_status->order_status_id)?>" <?php if($order_status->order_status_id == $shipping_information->order_status){echo("selected");} ?>><?php echo($order_status->order_status_name)?></option>
                    <?php endforeach;?>
                </select>
                <h3 class="admin_h3">Shipping Information</h3>
                <div class="order_detail-container-shipping-info-section">
                    <p>Order ID:</p>
                    <p><?php echo($shipping_information->order_id) ?></p>
                </div>
                <div class="order_detail-container-shipping-info-section">
                    <p>Order Date:</p>
                    <p><?php echo($shipping_information->order_date) ?></p>
                </div>
                <div class="order_detail-container-shipping-info-section">
                    <p>Customer Name:</p>
                    <p><?php echo($shipping_information->order_name) ?></p>
                </div>
                <h4>Order Address:</h4>
                <div class="order_detail-container-shipping-info-section">
                    <p><?php echo($shipping_information->order_country) ?></p>
                    <p><?php echo($shipping_information->order_city) ?></p>
                    <p><?php echo($shipping_information->order_street) ?> - <?php echo($shipping_information->order_housenr) ?></p>
                </div>
                <div class="order_details_back_container">
                    <a id="order_details_back" class="order_details_back button_with_background" href="orders.php">Back to orders</a>
                </div>
            </div>

            <div class="row">
                <h3 class="admin_h3">Ordered Products</h3>
                <?php foreach($order_details as $order_detail): ?>
                    <?php
                        $sql = "SELECT * FROM products AS prod JOIN categories AS cat ON prod.category_id = cat.category_id WHERE product_id = '$order_detail->product_id'";
                        $product_details = $db->query($sql)->fetch(PDO::FETCH_OBJ);
                    ?>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="admin_product_container d-block position-relative" style="<?php if($product_details->product_stock < 10){echo("background-color:#FA4343;color:white!");} ?>">
                            <div class="product_container-image">
                                <img src="../imgs/<?php echo($product_details->product_image_path)?>" alt="">
                            </div>
                            <div class="d-block product-container-information">
                                <p class="product_container-name"><?php echo($product_details->product_name)?></p>
                                <p class="product_container-category"><?php if($product_details->category_id==0){echo("N/A");}else{echo($product_details->category_name);}?></p>
                                <p class="admin_product_container-price">&yen; <?php echo($product_details->product_price); ?></p>
                                <p class="admin_product_container_amount">Quantity : <?php echo($order_detail->order_product_amount); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>