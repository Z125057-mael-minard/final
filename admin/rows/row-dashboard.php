<?php
require "../db_connection.php";

$sql = "SELECT * FROM products AS prod JOIN categories AS cat ON prod.category_id = cat.category_id ORDER BY prod.product_id DESC";
$products = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>



<div class="container">
    <div class="container-fluid">
        <div class="dashboard-container">
            <h2 class="admin_h2">Dashboard</h2>
            <div class="dashboard_row_1line row">
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
                <div class="dashboard_row row">
                    <div class="col-2 full-width">
                        <p class="admin_product_container-product_name"><?php echo($product->product_name)?></p>
                    </div>
                    <div class="col-2">
                        <p class="admin_product_container-category"><?php if($product->category_id==0){echo("N/A");}else{echo($product->category_name);}?></p>
                    </div>
                    <div class="col-2">
                        <p class="admin_product_container-price">&yen <?php echo($product->product_price); ?></p>
                    </div>
                    <div class="col-2">
                        <p class="admin_product_container-stock"><?php echo($product->product_stock); ?></p>
                    </div>
                    <div class="row col-auto">
                        <div class="col-auto align-content-center admin_product_container-edit">
                            <a href="edit_product.php?product_id=<?php echo($product->product_id)?>">Edit</a>
                        </div>
                        <div class="col-auto align-content-center admin_product_container_remove">
                            <a class="admin_product_remove" href="">X</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="dashboard_row row edited">
                <div class="col-2 full-width">
                    <p class="admin_product_container-product_name">KatKit</p>
                </div>
                <div class="col-2">
                    <p class="admin_product_container-category">Chocolate</p>
                </div>
                <div class="col-2">
                    <p class="admin_product_container-price">&yen 1750</p>
                </div>
                <div class="col-2">
                    <p class="admin_product_container-stock">12</p>
                </div>
                <div class="col-2">
                    <a class="admin_product_container-edit" href="">Edit</a>
                    <a class="admin_product_container-remove" href="">X</a>
                </div>
            </div>
        </div>
        <div class="footer"></div>
    </div>
</div>