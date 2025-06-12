<?php

require "db_connection.php";

require 'vendor/autoload.php';

$model_name = "";
$model_brand = "";
$model_type= "";
$category_year = "";
$category_name= "";

if(isset($_GET['model_name'])){
    $model_name = $_GET['model_name'];
}
if(isset($_GET['model_brand'])){
    $model_brand = $_GET['model_brand'];
}
if(isset($_GET['model_type'])){
    $model_type = $_GET['model_type'];
}
if(isset($_GET['model_year'])){
    $category_year = $_GET['model_year'];
}
if(isset($_GET['model_category'])){
    $category_name = $_GET['model_category'];
}

$userId = 1;
if($model_name != '' || $model_brand != '' || $model_type != '' || $category_year != '' || $category_name != ''){
    $baseQuery = "SELECT * FROM collection_table_user$userId AS col JOIN category_table_user$userId AS cat ON col.model_categoryid = cat.category_id JOIN price_type_table_user$userId AS type ON col.model_type = type.type_id WHERE model_amount > 0 ";
    $filter_name_query = "";
    $filter_brand_query = "";
    $filter_type_query = "";
    $filter_year_query = "";
    $category_query = "";


    if ($model_name == "empty"){
        $name_query = "AND model_name = ''";
    }
    else {
        $name_query = "AND model_name LIKE '%$model_name%'";
    }

    if ($model_brand == "empty"){
        $brand_query = "AND model_brand = ''";
    }
    else {
        $brand_query = "AND model_brand LIKE '%$model_brand%'";
    }

    if ($model_type == "empty"){
        $type_query = "AND model_type = ''";
    }
    else {
        $type_query = "AND model_type LIKE '%$model_type%'";
    }

    if($category_year == "empty"){
        $year_query = "AND category_year = ''";
    }
    else{
        $year_query = "AND category_year LIKE '%$category_year%'";
    }

    if($category_name == "empty") {
        $category_query = "AND category_name = ''";
    }
    else {
        $category_query = "AND category_name LIKE '%$category_name%'";
    }

    //$sql = "SELECT * FROM collection_table_user$userId AS col JOIN category_table_user$userId AS cat ON col.model_categoryid = cat.category_id WHERE model_name LIKE '%$model_name%' AND category_year LIKE '%$category_year%' AND category_name LIKE '%$category_name%'";
    $sql = $baseQuery . $name_query . $brand_query . $type_query . $year_query . $category_query;
    $collection_models = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
}
else {
    $sql = "SELECT * FROM collection_table_user$userId AS col JOIN category_table_user$userId AS cat ON col.model_categoryid = cat.category_id JOIN price_type_table_user$userId AS type ON col.model_type = type.type_id WHERE model_amount > 0 ORDER BY model_brand ASC";
    $collection_models = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
}

$sql = "SELECT * FROM category_table_user$userId ORDER BY category_name ASC";
$categories = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);

$sql = "SELECT DISTINCT category_year FROM category_table_user$userId ORDER BY category_table_user$userId.category_year DESC";
$years = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);

$sql = "SELECT DISTINCT model_brand FROM collection_table_user$userId ORDER BY model_brand ASC";
$model_brands = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);

$sql = "SELECT * FROM price_type_table_user$userId";
$collection_types = $db->query($sql)->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container">
    <div class="container-fluid">
        <div class="mobile-filter_button-container">
            <div class="mobile-filter_button-container-open">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="mobile-filter_button-container-close">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
        <div class="home_filter">
            <form type="GET" enctype="multipart/form-data" class="home_filter-form">
                <div class="home_filter-container1">
                    <div class="home_filter-container3">
                        <div class="filter-model_name filter-option-container">
                            <input id="model_name" type="text" placeholder="Zoek..." name="model_name" value="<?php if($model_brand) ?>">
                        </div>

                        <div class="filter-model_brand filter-option-container">
                            <select name="model_brand" id="model_brand">
                                <?php
                                echo("<option value=\"\">Merk</option>");
                                foreach ($model_brands as $model_brand) {
                                    echo("<option value=\"$model_brand->model_brand\">$model_brand->model_brand</option>");
                                }
                                ?>
                            </select>
                        </div>

                        <div class="filter-model_type filter-option-container">
                            <select name="model_type" id="model_type">
                                <?php
                                echo("<option value=\"\">Kaart type</option>");
                                foreach ($collection_types as $model_type) {
                                    echo("<option value=\"$model_type->type_id\">$model_type->type_name</option>");
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="home_filter-container4">
                        <div class="filter-category_year filter-option-container">
                            <select name="model_year" id="yearSelect">
                                <?php
                                echo("<option value=\"\">Jaar uitgave</option>");
                                foreach ($years as $year) {
                                    if($year->category_year != 0000){
                                        echo("<option value=\"$year->category_year\">$year->category_year</option>");
                                    }
                                }
                                ?>
                            </select>
                        </div>

                        <div class="filter-category_name filter-option-container">
                            <select name="model_category" id="categorySelect">
                                <option value="">Categorie</option>
                                <?php
                                foreach($categories as $category) {

                                    $category_id = $category->category_id;
                                    $category_name = $category->category_name;
                                    $category_year = $category->category_year;
                                    $category_cltotal = $category->category_cltotal;

                                    if($category_year != 0000){
                                        echo("<option value=\"$category_name\" data-year=\"$category_year\">$category_name ($category_year)</option>");
                                    }
                                }
                                ?>
                            </select>
                        </div>

                        <div class="d-none">
                            <div class="home_filter-no_selection">
                                <p>No name</p>
                                <input type="checkbox" name="model_name" value="empty">
                            </div>
                            <div class="home_filter-no_selection">
                                <p>No year</p>
                                <input type="checkbox" name="model_year" value="empty">
                            </div>
                            <div class="home_filter-no_selection">
                                <p>No category</p>
                                <input type="checkbox" name="model_category" value="empty">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home_filter-container2">
                    <div class="d-flex">
                        <button style="margin-right: 10px;" type="submit" class="filter_button"><i class="fa-solid fa-magnifying-glass"></i></button>
                        <button onclick="clearFilter()" class="filter_button"><i class="fa-regular fa-circle-xmark"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="container-fluid">
        <div class="collection row">
            <?php foreach($collection_models as $collection_model): ?>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="model_container d-block position-relative">
                        <a href="model_detail.php?model_id=<?php echo($collection_model->model_id)?>">
                            <div class="model_container-image">
                                <img src="imgs/<?php echo($collection_model->model_imagelocation)?>.jpg" alt="">
                            </div>
                            <div class="d-block">
                                <p class="model_container-model_name"><?php echo($collection_model->model_name)?></p>
                                <p class="model_container-category"><?php if($collection_model->category_id==0){echo("N/A");}else{echo($collection_model->category_name);}?> - <?php if($collection_model->category_id==0){echo("N/A");}else{echo($collection_model->category_year);}?></p>
                                <p class="model_container-nr_of">Nr of: <?php if($collection_model->category_id==0){echo("N/A");}else{echo("$collection_model->model_nrof" . "/" . "$collection_model->category_cltotal");}?></p>
                                <p class="model_container-price">&euro; <?php
                                    if($collection_model->model_custom_retailprice == 0 || $collection_model->model_custom_retailprice == null){
                                        echo($collection_model->type_price);
                                    }
                                    else {
                                        echo($collection_model->model_custom_retailprice);
                                    }
                                    ?>
                                </p>
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
