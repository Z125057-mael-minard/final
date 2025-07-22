<?php
include("../db_connection.php");

$sql = "SELECT * FROM categories";
$categories = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container">
    <div class="container-fluid">
        <div id="login-error-text">
            <?php
            if (isset($_SESSION['admin-add_product-error_message'])) {
                echo '<div class="alert alert-danger">' . htmlspecialchars($_SESSION['admin-add_product-error_message']) . '</div>';
                unset($_SESSION['admin-add_product-error_message']);
            }
            ?>
        </div>
    </div>
</div>

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
                <input type="number" name="product_price" placeholder="Product Prize" min="0" required>
                <input type="number" name="product_stock" placeholder="Product Stock" min="0" required>
                <input type="submit">
            </form>
        </div>
    </div>
</div>