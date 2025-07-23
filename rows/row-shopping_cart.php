<?php
require('db_connection.php');
$products = $_SESSION['shopping_cart'];

$total_price = 0;
?>

<div class="container">
    <div class="container-fluid">
        <?php foreach ($products as $productId => $amount): ?>
            <?php
            $sql = "SELECT * FROM products  WHERE product_id = '$productId'";
            $product = $db->query($sql)->fetch(PDO::FETCH_OBJ);

            $total_price += $amount * $product -> product_price;
            ?>
            <div class="row justify-content-end align-items-center cart_product_container big_screen_display">
                <div class="col-auto justify-content-start cart_product_img">
                    <img src="imgs/<?php echo($product->product_image_path)?>" alt="">
                </div>
                <div class="col justify-content-start cart_product_name_price">
                    <p class="cart_product_name"><?= $product -> product_name ?></p>
                    <p class="cart_product_price">&yen; <?= $product -> product_price ?></p>
                </div>
                <div class="col-2">
                    <div class="cart_product_info">
                        <p class="big_screen_info">Quantity : </p>
                        <p class="fw-bold"><?= $amount ?></p>
                    </div>
                </div>
                <div class="col-2 ">
                    <div class="cart_product_info">
                        <p class="big_screen_info">Total : </p>
                        <p class="fw-bold">&yen; <?php echo($amount * $product -> product_price) ?></p>
                    </div>
                </div>
                <div class="col-1 align-content-center cart_product_remove">
                        <a href="php_scripts/remove_item.php?product_id=<?php echo($product -> product_id)?> ">X</a>
                </div>
            </div>

            <div class="row justify-content-center cart_product_container small_screen_display">
                <div class="col">
                    <div class="col-auto">
                        <div class="cart_product_img">
                            <img src="imgs/<?php echo($product->product_image_path)?>" alt="">
                        </div>
                        <div class="cart_product_name_price">
                            <p class="cart_product_name"><?= $product -> product_name ?></p>
                            <p class="cart_product_price">&yen; <?= $product -> product_price ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-auto cart_product_info">
                            <p>Quantity : </p>
                            <p class="fw-bold"><?= $amount ?></p>
                        </div>
                        <div class=" col-auto cart_product_info">
                            <p>Total : </p>
                            <p class="fw-bold">&yen; <?php echo($amount * $product -> product_price) ?></p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-auto align-content-center cart_product_remove">
                        <a href="php_scripts/remove_item.php?product_id=<?php echo($product -> product_id)?> ">X</a>
                    </div>
                </div>

            </div>
        <?php endforeach;?>
        <div class="row checkout_container justify-content-end">
            <div class="col-auto align-items-center">
                <div class="col-auto cart_total_price">
                    <p>Total : </p>
                    <p class="fw-bold">&yen; <?php echo($total_price) ?></p>
                </div>
                <a id="checkout_button" class="button_with_background checkout_button" href="checkout.php">Checkout</a>
            </div>

        </div>
    </div>
</div>

<script src="javascipt/remove_item.js"></script>
