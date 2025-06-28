<?php
include("../db_connection.php");

$sql = "SELECT * FROM categories";
$categories = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container">
    <div class="container-fluid">
        <div class="add_product-container">
            <form action="scripts/add_product.php" method="post">
                <input type="text" name="product_name">
                <select name="product_category_id" id="">
                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo($category->category_id) ?>"><?php echo($category->category_name) ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="number" name="product_price">
                <input type="number" name="product_stock">
                <input type="submit">
            </form>
        </div>
    </div>
</div>