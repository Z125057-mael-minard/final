<?php
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
?>
<div class="container">
  <div class="container-fluid">
    <h2 class="title-header">Change account details</h2>
      <form action="php_scripts/account-change-details.php" method="post">
          <div id="account_info_container" class="account_info_container">
              <div  class="row justify-content-center">
                  <label class="col" for="email">Email:</label>
                  <input class="col-auto" type="text" disabled="disabled" id="email" name="email" value="<?php echo htmlspecialchars($user['user_email']) ?>">
              </div>
              <div  class="row justify-content-center">
                  <label class="col" for="name">Name:</label>
                  <input class="col-auto" type="text" id="name" name="name" value="<?php echo $name ?>">
              </div>
              <div  class="row justify-content-center">
                  <label class="col" for="country">Country:</label>
                  <input class="col-auto" type="text" id="country" name="country" value="<?php echo $country ?>">
              </div>
              <div  class="row justify-content-center">
                  <label class="col" for="city">City:</label>
                  <input class="col-auto" type="text" id="city" name="city" value="<?php echo $city ?>">
              </div>
              <div  class="row justify-content-center">
                  <label class="col" for="street">Street:</label>
                  <input class="col-auto" type="text" id="street" name="street" value="<?php echo $street ?>">
              </div>
              <div  class="row justify-content-center">
                  <label class="col" for="house_nr">House Number:</label>
                  <input class="col-auto" type="text" id="house_nr" name="house_nr" value="<?php echo $house_nr ?>">
              </div>
          </div>
          <div class="account_changes_buttons_container row">
              <!-- Submit button -->
              <button id="account_change_yes" type="submit" data-mdb-button-init data-mdb-ripple-init class="col-auto d-flex button_with_background">Change</button>
              <div class="col d-flex justify-content-end">
                  <a href="account.php" class="account_cancel_changes">
                      Cancel
                  </a>
              </div>
          </div>
      </form>
  </div>
</div>
