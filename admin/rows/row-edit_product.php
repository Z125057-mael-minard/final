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
        <div class="edit_product-container">
            <form action="scripts/edit_product.php" method="post">
                <input name="product_name" text="product_name" value="<?php echo($product->product_name) ?>">
                <select name="product_category" id="">
                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo($category->category_id)?>" <?php if($category->category_id == $product->category_id){echo("selected");}?>><?php echo($category->category_name)?></option>
                    <?php endforeach;?>
                </select>
                <input type="number" name="product_price" value="<?php echo($product->product_price) ?>">
                <input type="number" name="product_stock" value="<?php echo($product->product_stock) ?>">
                <input type="hidden" name="product_id" value="<?php echo($product->product_id) ?>">
                <input type="submit">
            </form>
        </div>
    </div>
</div>