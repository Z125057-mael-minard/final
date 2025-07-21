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
        $filter_product_name = "AND product_name LIKE '%".$product_name."%'";
    }

    if ($product_category != ""){
        $filter_product_category = "AND prod.category_id = $product_category";
    }

    if ($price_asc_desc == "ASC" || $price_asc_desc == "DESC"){
        $filter_price_asc_desc = "ORDER BY product_price " . $price_asc_desc;
    }

    $sql = $baseQuery . " " . $filter_product_name . " " . $filter_product_category . " " . $filter_price_asc_desc;

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
        <div id="new-arrivals"></div>
          <h1>New arrivals</h1>
    <div class="container">

      <div class="slider-wrapper">
        <button class="nav left" id="leftBtn">‹</button>
        <div class="slider-container" id="slider">
          <?php 
          $arr = $products;
          usort($arr, function($a, $b) {return $b->product_id <=> $a->product_id;}); // Sort in descending order
          $arrivals = array_slice($arr, 0, 9);
          foreach($arrivals as $product):
          ?>
          <div class="product col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class="product_container d-block position-relative">
              <a href="product.php?product_id=<?php echo($product->product_id)?>">
                <div class="product_container-image">
                  <img src="imgs/<?php echo($product->product_image_path)?>" alt="">
                </div>
                <div class="d-block product-container-information">
                  <p class="product_container-model_name"><?php echo($product->product_name)?></p>
                  <p class="product_container-category"><?php if($product->category_id==0){echo("N/A");}else{echo($product->category_name);}?></p>
                  <p class="product_container-price">&yen; <?php echo($product->product_price); ?></p>
                </div>
              </a>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <button class="nav right" id="rightBtn">›</button>
      </div>

      <div class="container-fluid sliding-container">
        <div class="sliding-arrow-left"></div>
          <img src=""/>
        <div class="sliding-arrow-right"></div>
          <img src=""/>
        <div class="sliding-items-container">
        </div>
      </div>
    </div>
        <div id="seasonal-products"></div>
          <h1>Seasonal products</h1>
    <div class="container">
      <div class="container-fluid">
        <div class="collection row">
          <?php 
          $season = 0;
          $day = (int) date('d');
          $month = (int) date('m');
          if (($month === 11 && $day >= 1) || $month === 0 || $month === 1) {
            $season = 3;
          } else if ($month === 2 || $month === 3 || $month === 4) {
            $season = 0;
          } else if ($month === 5 || $month === 6 || $month === 7) {
            $season = 1;
          } else if ($month === 8 || $month === 9 || $month === 10) {
            $season = 2;
          }
          foreach($products as $product):
          if ($product->product_season == $season):
          ?>
          <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class="product_container d-block position-relative">
              <a href="product.php?product_id=<?php echo($product->product_id)?>">
                <div class="product_container-image">
                  <img src="imgs/<?php echo($product->product_image_path)?>" alt="">
                </div>
                <div class="d-block product-container-information">
                  <p class="product_container-model_name"><?php echo($product->product_name)?></p>
                  <p class="product_container-category"><?php if($product->category_id==0){echo("N/A");}else{echo($product->category_name);}?></p>
                  <p class="product_container-price">&yen; <?php echo($product->product_price); ?></p>
                </div>
              </a>
            </div>
          </div>
          <?php endif; endforeach; ?>
        </div>
      </div>
    </div>
        <div id="filter-container" class="home_filter-container d-flex justify-content-evenly mb-4">
            <form type="GET" enctype="multipart/form-data">
                <input id="filter_product_name" class="filter_product_name filter_product" name="product_name" type="text" value="<?php if(isset($_GET['product_name'])){echo($_GET['product_name']);} ?>">
                <select id="filter_product_category" class="filter_product_category filter_product" name="product_category" id="">
                    <option value="">Select category</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo($category->category_id) ?>" <?php if(isset($_GET['product_category']) && $category->category_id == $_GET['product_category']){echo('selected');} ?>><?php echo($category->category_name) ?></option>
                    <?php endforeach; ?>
                </select>
                <select id="filter_product_order" class="filter_product_order filter_product" name="price_asc_desc" id="">
                    <option value="">No order</option>
                    <option value="ASC" <?php if(isset($_GET['price_asc_desc']) && $_GET['price_asc_desc'] == "ASC"){echo('selected');} ?>>Asc</option>
                    <option value="DESC" <?php if(isset($_GET['price_asc_desc']) && $_GET['price_asc_desc'] == "DESC"){echo('selected');} ?>>Desc</option>
                </select>
                <button style="margin-right: 10px;" type="submit" class="filter_button filter_button_search filter_product">Search</button>
                <button onclick="clearFilter()" class="filter_button filter_button_clear filter_product">Clear filter</button>
            </form>
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
                            <div class="d-block product-container-information">
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

<script src="javascript/clear_filter.js"></script>
<script src="javascript/edit_filteroptions.js"></script>
<script src="javascript/sliding-products-gpt.js"></script>
