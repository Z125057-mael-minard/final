<?php
require "../db_connection.php";

$sql = "SELECT * FROM orders ORDER BY order_id DESC";
$orders = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container">
    <div class="container-fluid">
        <div class="orders-container">
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
                <a href="order_detail.php?order_id=<?php echo($order->order_id); ?>">
                    <div class="orders-container-order d-flex justify-content-evenly" style="width: 100%; border: black solid 1px;border-radius: 5px;">
                        <p><?php echo($order->order_id) ?></p>
                        <p><?php echo($order->order_date) ?></p>
                        <p><?php echo($total_price) ?></p>
                    </div>
                </a>
            <?php endforeach;?>
        </div>
    </div>
</div>