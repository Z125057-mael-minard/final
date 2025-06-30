<?php
require('db_connection.php');
$products = $_SESSION['shopping_cart'];

$total_price = 0;
?>

<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <p>Name</p>
            </div>
            <div class="col-2">
                <p>Price</p>
            </div>
            <div class="col-2">
                <p>Total</p>
            </div>
            <div class="col-2">
                <p>Price total</p>
            </div>
        </div>
        <?php foreach ($products as $productId => $amount): ?>
            <?php
            $sql = "SELECT * FROM products  WHERE product_id = '$productId'";
            $product = $db->query($sql)->fetch(PDO::FETCH_OBJ);

            $total_price += $amount * $product -> product_price;
            ?>
            <div class="row">
                <div class="col-2">
                    <p><?= $product -> product_name ?></p>
                </div>
                <div class="col-2">
                    <p><?= $product -> product_price ?></p>
                </div>
                <div class="col-2">
                    <p><?= $amount ?></p>
                </div>
                <div class="col-2">
                    <p><?php echo($amount * $product -> product_price) ?></p>
                </div>
                <div class="col-2">
                    <a href="php_scripts/remove_item.php?product_id=<?php echo($product -> product_id)?> ">X</a>
                </div>
            </div>
        <?php endforeach;?>
        <div class="row">
            <p>Total price: <?php echo($total_price) ?></p>
            <a href="checkout.php">Checkout</a>
        </div>
    </div>
</div>

<script src="javascipt/remove_item.js"></script>