<?php
include("../db_connection.php");

$product_id = $_GET['product_id'];

$sql = "SELECT * FROM products AS prod JOIN categories AS cat ON prod.category_id = cat.category_id WHERE product_id = '$product_id'";
$product = $db->query($sql)->fetch(PDO::FETCH_OBJ);

$sql = "SELECT * FROM categories";
$categories = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container">
    <div class="container-fluid">
        <h2 class="admin_h2">Edit Product</h2>
        <div class="edit_product-container">
            <form action="scripts/edit_product.php" method="post">
                <div class="edit_product-container-item_box">
                    <p>Product Name:</p>
                    <input name="product_name" text="product_name" value="<?php echo($product->product_name) ?>">
                </div>

                <div class="edit_product-container-item_box">
                    <p>Product Category:</p>
                    <select name="product_category" id="" style="margin-bottom: 0px">
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo($category->category_id)?>" <?php if($category->category_id == $product->category_id){echo("selected");}?>><?php echo($category->category_name)?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="edit_product-container-item_box">
                    <p>Product Price:</p>
                    <input type="number" name="product_price" value="<?php echo($product->product_price) ?>">
                </div>

                <div class="edit_product-container-item_box">
                    <p>Product Stock:</p>
                    <input type="number" name="product_stock" value="<?php echo($product->product_stock) ?>">
                </div>

                <input type="hidden" name="product_id" value="<?php echo($product->product_id) ?>">
                <input type="submit">
            </form>
        </div>
    </div>
</div>