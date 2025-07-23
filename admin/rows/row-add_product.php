<?php
include("../db_connection.php");

$sql = "SELECT * FROM categories";
$categories = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container">
    <div class="container-fluid d-flex justify-content-center">
        <div class="add_product-container">
            <h2 class="admin_h2">Add Product</h2>
            <form action="scripts/add_product.php" method="post">
                <input type="text" name="product_name" placeholder="Product Name" required>
                <select name="product_category_id" id="">
                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo($category->category_id) ?>"><?php echo($category->category_name) ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="number" name="product_price" placeholder="Product Prize" required>
                <input type="number" name="product_stock" placeholder="Product Stock" required>
                <div class="row admin_add_or_cancel_container">
                    <div class="col justify-content-start">
                        <input id="add_product" class="col-auto button_with_background" type="submit">
                    </div>
                    <div class="row col justify-content-end">
                        <a class="col-auto flex-wrap align-content-center" href="dashboard.php">Cancel</a>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>