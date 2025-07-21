<?php
require "../db_connection.php";

$sql = "SELECT * FROM orders AS ord JOIN order_status AS ord_stat ON ord.order_status = ord_stat.order_status_id ORDER BY order_id DESC";
$orders = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container">
    <div class="container-fluid">
        <div class="orders-container">
            <h2 class="admin_h2">Orders</h2>
            <div class="row">
                <?php foreach ($orders as $order): ?>
                    <?php
                        $total_price = 0;
                    ?>
                    <?php
                    $sql = "SELECT * FROM order_rows WHERE order_id = '$order->order_id'";
                    $order_details = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);

                    foreach ($order_details as $order_detail): {
                        $sql = "SELECT * FROM products WHERE product_id = '$order_detail->product_id'";
                        $product_details = $db->query($sql)->fetch(PDO::FETCH_OBJ);

                        $product_price = $product_details->product_price;

                        $total_product_price = $product_price * $order_detail->order_product_amount;
                        $total_price += $total_product_price;
                    }
                    endforeach;
                    ?>
                <div class="col-12 mb-5">
                    <a href="order_detail.php?order_id=<?php echo($order->order_id); ?>">
                        <div class="orders-container-order" style="width: 100%; border: black solid 1px;border-radius: 5px;">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <div class="orders-container-order-details_container">
                                        <div class="orders-container-order-details_container-text">
                                            <p>ID:</p>
                                        </div>
                                        <div class="orders-container-order-details_container-data">
                                            <p><?php echo($order->order_id) ?></p>
                                        </div>
                                    </div>
                                    <div class="orders-container-order-details_container">
                                        <div class="orders-container-order-details_container-text">
                                            <p>&yen;:</p>
                                        </div>
                                        <div class="orders-container-order-details_container-data">
                                            <p><?php echo($total_price) ?></p>
                                        </div>
                                    </div>
                                    <div class="orders-container-order-details_container">
                                        <div class="orders-container-order-details_container-text">
                                            <p>Date:</p>
                                        </div>
                                        <div class="orders-container-order-details_container-data">
                                            <p><?php echo($order->order_date) ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto text-center orders-container-order-status">
                                    <div class="">
                                        <p style="margin-bottom: 0;">Status:</p>
                                        <p style="color: <?php if($order->order_status_id == 1){echo('red');}else{echo('green');} ?>"><?php echo($order->order_status_name) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>