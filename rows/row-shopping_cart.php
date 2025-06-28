<?php
require('db_connection.php');
$products = $_SESSION['shopping_cart'];
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
    </div>
</div>

<script src="javascipt/remove_item.js"></script>