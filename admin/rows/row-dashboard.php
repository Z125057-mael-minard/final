<?php
require "../db_connection.php";

$sql = "SELECT * FROM products AS prod JOIN categories AS cat ON prod.category_id = cat.category_id ORDER BY prod.product_id DESC";
$products = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>



<div class="container">
    <div class="container-fluid">
        <div class="dashboard-container">
            <h2 class="admin_h2">Dashboard</h2>
            <div class="row">
                <?php foreach($products as $product): ?>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="admin_product_container d-block position-relative" style="<?php if($product->product_stock < 10){echo("background-color:#FA4343;color:white!");} ?>">
                            <div class="product_container-image">
                                <img src="../imgs/<?php echo($product->product_image_path)?>" alt="">
                            </div>
                            <div class="d-block product-container-information">
                                <p class="product_container-name"><?php echo($product->product_name)?></p>
                                <p class="admin_product_container-stock">Stock: <?php echo($product->product_stock)?></p>
                                <p class="product_container-category"><?php if($product->category_id==0){echo("N/A");}else{echo($product->category_name);}?></p>
                                <p class="product_container-price">&yen; <?php echo($product->product_price); ?></p>

                                <div class="row col-auto">
                                    <div class="col-auto align-content-center admin_product_container-edit">
                                        <a href="edit_product.php?product_id=<?php echo($product->product_id)?>">Edit</a>
                                    </div>
                                    <div class="col-auto align-content-center admin_product_container_remove">
                                        <a class="admin_product_remove" href="">X</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="footer"></div>
    </div>
    <div id="disk-1" class="background-disk"></div>
    <div id="disk-2" class="background-disk"></div>
    <div id="disk-3" class="background-disk"></div>
    <div id="disk-4" class="background-disk"></div>
    <div id="disk-5" class="background-disk"></div>
    <div id="disk-6" class="background-disk"></div>
    <div id="disk-7" class="background-disk"></div>
    <div id="disk-8" class="background-disk"></div>
    <div id="disk-9" class="background-disk"></div>
    <div id="disk-10" class="background-disk"></div>
    <div id="disk-11" class="background-disk"></div>
    <div id="disk-12" class="background-disk"></div>
    <div id="inner-disk-1" class="background-inner-disk"></div>
    <div id="inner-disk-2" class="background-inner-disk"></div>
    <div id="inner-disk-3" class="background-inner-disk"></div>
</div>