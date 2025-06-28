<?php
require "db_connection.php";

$product_id = $_GET['product_id'];

$sql = "SELECT * FROM products AS prod JOIN categories AS cat ON prod.category_id = cat.category_id WHERE prod.product_id = '$product_id'";
$product = $db->query($sql)->fetch(PDO::FETCH_OBJ);
?>
<div class="container">
    <div class="container-fluid">
        <div class="row product_detail-container">
            <div class="col-lg-5 col-sm-12">
                <div class="product_detail-container-item">
                    <p class="product_detail-container-item-name"><?php echo($product->product_name) ?></p>
                    <p class="product_detail-container-item-category"><?php echo($product->category_name) ?></p>
                    <p class="product_detail-container-item-price">&yen; <?php echo($product->product_price) ?></p>
                    <p class="product_detail-container-item-stock">Stock: <?php echo($product->product_stock) ?></p>
                </div>

                <div class="product_detail-container-add_to_cart">
                    <form action="php_scripts/add_to_cart.php" method="post">
                        <input name="amount" type="number">
                        <input name="product_id" type="hidden" value="<?php echo($product->product_id)?>">
                        <input type="submit" value="Add To Cart">
                    </form>
                </div>
            </div>


            <div class="add_car-image col-lg-5 col-sm-12">
                <img id="image_preview" src="<?php echo("imgs/" . $product->category_image_path) ?>.png" alt="" style="width: 100%; height: auto">
            </div>
        </div>
    </div>
</div>

<script src="javascript/add_remove_shoppingcartitem.js"></script>


