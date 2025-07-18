<?php
if ($_SESSION["logged_in"]) {
  $stmt = $db->prepare("SELECT * FROM sessions WHERE session_token = ?");
  $stmt->execute(array($_SESSION["session_token"]));
  $current_session = $stmt->fetch();
  $stmt = $db->prepare("SELECT * FROM users WHERE user_id = ?");
  $stmt->execute(array($current_session['user_id']));
  $user = $stmt->fetch();
  $stmt = $db->prepare("SELECT * FROM user_addresses WHERE user_id = ?");
  $stmt->execute(array($current_session['user_id']));
  $address = $stmt->fetch();
  $name = $user['user_name'];
  if ($address == null){
    $country = "";
    $city = "";
    $street = "";
    $house_nr = "";
  } else {
    $country = $address["address_country"];
    $city = $address["address_city"];
    $street = $address["address_street"];
    $house_nr = $address["address_house_number"];
  }
}
else {
  $name = "";
  $country = "";
  $city = "";
  $street = "";
  $house_nr = "";
}

?>

<div class="container">
    <div class="container-fluid">
        <div class="checkout-container">
            <form action="php_scripts/checkout.php" method="post">
                <h3>Shipping information</h3>
                <input type="text" name="shipping_name" value="<?php echo $name ?>" placeholder="Name" required>
                <input type="text" name="shipping_country" value="<?php echo $country?>" placeholder="Country" required>
                <input type="text" name="shipping_city" value="<?php echo $city?>" placeholder="City" required>
                <input type="text" name="shipping_street" value="<?php echo $street?>" placeholder="Street" required>
                <input type="text" name="shipping_houseNr" value="<?php echo $house_nr?>" placeholder="House Nr" required>
                <label for="shipping_remember">Remember shipping information</label>
                <input type="checkbox" name="shipping_remember" >

                <h3>Creditcard info</h3>
                <input type="text" name="creditcard_name" placeholder="Name" required>
                <input type="date" name="creditcard_expDate" placeholder="Expiration date" required>
                <input type="text" name="creditcard_csv" placeholder="CSV" required>

                <input type="submit">
            </form>
        </div>
    </div>
</div>
