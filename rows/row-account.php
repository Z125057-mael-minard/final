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

$email = $user['user_email'];
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
        <?php
        if (isset($_SESSION['account_change'])){
        echo '<div class="alert-success">' . htmlspecialchars($_SESSION['account_change']) . '</div>';
        unset($_SESSION['account_change']);
        }
        ?>
      <div class="account_container">
          <h2 class="title-header">Account details</h2>
          <div id="account_info_container" class="account_info_container">
              <form>
                  <div class="row justify-content-center">
                      <label class="col" for="email">Email:</label>
                      <input class="col-auto" type="text" disabled="disabled" id="email" name="email" value="<?php echo $email ?>">
                  </div>
                  <div class="row justify-content-center">
                      <label class="col" for="name">Name:</label>
                      <input class="col-auto" type="text" disabled="disabled" id="name" name="name" value="<?php echo $name ?>">
                  </div>
                  <div class="row justify-content-center">
                      <label class="col" for="country">Country:</label>
                      <input class="col-auto" type="text" disabled="disabled" id="country" name="country" value="<?php echo $country?>">
                  </div>
                  <div class="row justify-content-center">
                      <label class="col" for="city">City:</label>
                      <input class="col-auto" type="text" disabled="disabled" id="city" name="city" value="<?php echo $city ?>">
                  </div>
                  <div class="row justify-content-center">
                      <label class="col" for="street">Street:</label>
                      <input class="col-auto" type="text" disabled="disabled" id="street" name="street" value="<?php echo $street ?>">
                  </div>
                  <div class="row justify-content-center">
                      <label class="col" for="house_nr">House Number:</label>
                      <input class="col-auto" type="text" disabled="disabled" id="house_nr" name="house_nr" value="<?php echo $house_nr ?>">
                  </div>
              </form>
          </div>
      </div>
    <!-- 
    <h1 class="user-account-information-title"> Email </h1>
    <p class="user-account-info"></p>
    <h1 class="user-account-information-title"> Name </h1>
    <p class="user-account-info"><?php echo htmlspecialchars($user['user_name']) ?></p>
    <h1 class="user-account-information-title"> Address </h1>
    <h2 class="user-account-information-title"> Country</h2>
    <p class="user-account-info"><?php echo htmlspecialchars($address['address_country']) ?></p>
    <h2 class="user-account-information-title"> City </h2>
    <p class="user-account-info"><?php echo htmlspecialchars($address['address_city']) ?></p>
    <h2 class="user-account-information-title"> Street </h2>
    <p class="user-account-info"><?php echo htmlspecialchars($address['address_street']) ?></p>
    <h2 class="user-account-information-title"> House number </h2>
    <p class="user-account-info"><?php echo htmlspecialchars($address['address_house_number']) ?></p>
    -->
      <div class="account_buttons_container row">
          <div class="col d-flex">
              <a id="account_info_change" href="account-change-details.php" class="button_with_background">
                  Change account details
              </a>
          </div>
          <div class="col d-flex justify-content-end">
              <a id="account_password_change" href="change-password.php" class="button_with_background">
                  Change password
              </a>
          </div>
      </div>
  </div>
  <div class="container-fluid">
  </div>
</div>
