<?php

require "db_connection.php";

$product_name = "";
$product_category = "";
$price_asc_desc = "";

if(isset($_GET['product_name'])){
    $product_name = $_GET['product_name'];
}
if(isset($_GET['product_category'])){
    $product_category = $_GET['product_category'];
}
if(isset($_GET['price_asc_desc'])){
    $price_asc_desc = $_GET['price_asc_desc'];
}

if($product_name != "" || $product_category != "" || $price_asc_desc != ""){
    $baseQuery = "SELECT * FROM products AS prod JOIN categories AS cat ON prod.category_id = cat.category_id";
    $filter_product_name = "";
    $filter_product_category = "";
    $filter_price_asc_desc = "";

    if ($product_name != ""){
        $filter_product_name = "AND product_name LIKE '%$product_name%'";
    }

    if ($product_category != ""){
        $filter_product_category = "AND category_id = '$product_category'";
    }

    if ($price_asc_desc == "ASC" || $price_asc_desc == "DESC"){
        $filter_price_asc_desc = $price_asc_desc;
    }

    $sql = $baseQuery . $filter_product_name . $filter_product_category . $filter_price_asc_desc;
    $products = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
}
else {
    $sql = "SELECT * FROM products AS prod JOIN categories AS cat ON prod.category_id = cat.category_id";
    $products = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
}

$sql = "SELECT * FROM categories ORDER BY category_name ASC";
$categories = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);

?>

<div class="container">
    <div class="container-fluid">
        <div class="home_filter-container d-flex justify-content-evenly mb-4">
            <input type="text">
            <select name="" id="">
                <?php foreach ($categories as $category): ?>
                    <option value="<?php echo($category->category_id) ?>"><?php echo($category->category_name) ?></option>
                <?php endforeach; ?>
            </select>
            <select name="" id="">
                <option value="">No order</option>
                <option value="ASC">Asc</option>
                <option value="DESC">Desc</option>
            </select>
            <button style="margin-right: 10px;" type="submit" class="filter_button"><i class="fa-solid fa-magnifying-glass"></i></button>
            <button onclick="clearFilter()" class="filter_button"><i class="fa-regular fa-circle-xmark"></i></button>
        </div>
    </div>
</div>

<div class="container">
    <div class="container-fluid">
        <div class="collection row">
            <?php foreach($products as $product): ?>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product_container d-block position-relative">
                        <a href="product.php?product_id=<?php echo($product->product_id)?>">
                            <div class="product_container-image">
                                <img src="imgs/<?php echo($product->product_image_path)?>" alt="">
                            </div>
                            <div class="d-block">
                                <p class="product_container-model_name"><?php echo($product->product_name)?></p>
                                <p class="product_container-category"><?php if($product->category_id==0){echo("N/A");}else{echo($product->category_name);}?></p>
                                <p class="product_container-price">&yen; <?php echo($product->product_price); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script src="javascript/clear_filter.js"></script>

<script src="javascript/edit_filteroptions.js"></script>
