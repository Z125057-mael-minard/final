<?php

require "db_connection.php";

    $sql = "SELECT * FROM products AS prod JOIN categories AS cat ON prod.category_id = cat.category_id";
    $products = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container">
    <div class="container-fluid">
        <div class="collection row">
            <?php foreach($products as $product): ?>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product_container d-block position-relative">
                        <a href="product.php?product_id=<?php echo($product->product_id)?>">
                            <div class="product_container-image">
                                <img src="imgs/<?php echo($product->product_image_path)?>.jpg" alt="">
                            </div>
                            <div class="d-block">
                                <p class="product_container-model_name"><?php echo($product->product_name)?></p>
                                <p class="product_container-category"><?php if($product->category_id==0){echo("N/A");}else{echo($product->category_name);}?></p>
                                <p class="product_container-price">&euro; <?php echo($product->product_price); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
