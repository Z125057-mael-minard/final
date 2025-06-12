<?php
require "db_connection.php";

$model_id = $_GET['model_id'];

$userId = 1;

$sql = "SELECT * FROM collection_table_user$userId AS col JOIN category_table_user$userId AS cat ON col.model_categoryid = cat.category_id JOIN price_type_table_user$userId AS type ON col.model_type = type.type_id WHERE model_id = '$model_id'";
$model_details = $db->query($sql)->fetch(PDO::FETCH_OBJ);
?>
<div class="container">
    <div class="container-fluid">
        <div class="row model_detail-container">
            <div class="col-lg-5 col-sm-12">
                <div class="model_detail-container-item">
                    <p class="model_detail-container-item-brand"><?php echo($model_details->model_brand) ?></p>
                    <p class="model_detail-container-item-type"><?php echo($model_details->model_name) ?></p>
                </div>

                <div class="model_detail-container-item">
                    <ul>
                        <li><?php echo($model_details->type_name)?></li>
                        <?php
                        if($model_details->category_year != 0000){
                            echo("<li>$model_details->category_year</li>");
                            echo("<li>$model_details->category_name - $model_details->model_nrof / $model_details->category_cltotal</li>");
                        }
                        ?>
                    </ul>
                </div>
                <div class="model_detail-container-item-price">
                    <p>&euro;</p>
                    <?php
                    if($model_details->model_custom_retailprice == 0 || $model_details->model_custom_retailprice == null){
                        echo("<p>$model_details->type_price</p>");
                    }
                    else {
                        echo("<p>$model_details->model_custom_retailprice</p>");
                    }
                    ?>
                </div>
                <select name="" id="">
                    <?php
                    $x = 1;
                    while ($x <= $model_details->model_amount) {
                        echo("<option value=\"$x\">$x</option>");
                        $x++;
                    }
                    ?>
                </select>
                <button onclick="add_shoppingcartitem()">Add to cart</button>
                <i class="add_to_cart position-absolute fa-solid fa-cart-plus" id="add_carticon_<?php echo($model_details->model_id) ?>" data-item-id="<?php echo($model_details->model_id) ?>" style="display:none"></i>
                <i class="remove_from_cart position-absolute fa-solid fa-cart-plusfa-solid fa-cart-shopping" id="remove_carticon_<?php echo($model_details->model_id) ?>" data-item-id="<?php echo($model_details->model_id) ?>" style="display:none"></i>
            </div>


            <div class="add_car-image col-lg-5 col-sm-12">
                <img id="image_preview" src="<?php echo("imgs/" . $model_details->model_imagelocation) ?>.jpg" alt="" style="width: 100%; height: auto">
            </div>
        </div>
    </div>
</div>

<script src="javascript/add_remove_shoppingcartitem.js"></script>


