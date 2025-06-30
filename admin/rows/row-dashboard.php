<?php
require "../db_connection.php";

$sql = "SELECT * FROM products AS prod JOIN categories AS cat ON prod.category_id = cat.category_id ORDER BY prod.product_id DESC";
$products = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container">
    <div class="container-fluid">
        <div class="dashboard-container">
            <div class="row">
                <div class="col-2">
                    <p>Title</p>
                </div>
                <div class="col-2">
                    <p>Category</p>
                </div>
                <div class="col-2">
                    <p>Price</p>
                </div>
                <div class="col-2">
                    <p>Stock</p>
                </div>
                <div class="col-2">

                </div>
            </div>
            <?php foreach($products as $product): ?>
                <div class="row">
                    <div class="col-2">
                        <p class="product_container-product_name"><?php echo($product->product_name)?></p>
                    </div>
                    <div class="col-2">
                        <p class="product_container-category"><?php if($product->category_id==0){echo("N/A");}else{echo($product->category_name);}?></p>
                    </div>
                    <div class="col-2">
                        <p class="product_container-price">&euro; <?php echo($product->product_price); ?></p>
                    </div>
                    <div class="col-2">
                        <p class="product_container-stock"><?php echo($product->product_stock); ?></p>
                    </div>
                    <div class="col-2">
                        <a href="edit_product.php?product_id=<?php echo($product->product_id)?>">Edit</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>