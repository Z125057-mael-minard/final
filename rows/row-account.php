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

?>
<div class="container">
  <div class="container-fluid">
    <?php 
    if (isset($_SESSION['account_change'])){
    echo '<div class="alert-success">' . htmlspecialchars($_SESSION['account_change']) . '</div>';
    unset($_SESSION['account_change']);
    }
    ?>
    <h2 class="title-header">Account details</h2>
    <form>
      <label for="email">Email:</label>
      <input type="text" disabled="disabled" id="email" name="email" value="<?php echo htmlspecialchars($user['user_email']) ?>"><br><br>
      <label for="name">Name:</label>
      <input type="text" disabled="disabled" id="name" name="name" value="<?php echo htmlspecialchars($user['user_name']) ?>"><br><br>
      <label for="country">Country:</label>
      <input type="text" disabled="disabled" id="country" name="country" value="<?php echo htmlspecialchars($address['address_country']) ?>"><br><br>
      <label for="city">City:</label>
      <input type="text" disabled="disabled" id="city" name="city" value="<?php echo htmlspecialchars($address['address_city']) ?>"><br><br>
      <label for="street">Street:</label>
      <input type="text" disabled="disabled" id="street" name="street" value="<?php echo htmlspecialchars($address['address_street']) ?>"><br><br>
      <label for="house_nr">House Number:</label>
      <input type="text" disabled="disabled" id="house_nr" name="house_nr" value="<?php echo htmlspecialchars($address['address_house_number']) ?>"><br><br>
    </form>
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
    <a href="account-change-details.php" class="user-account-change-button">
      <div>
        Change account details
      </div>
    </a>
    <a href="change-password.php" class="user-account-change-button">
      <div>
        Change password
      </div>
    </a>
  </div>
  <div class="container-fluid">
  </div>
</div>
