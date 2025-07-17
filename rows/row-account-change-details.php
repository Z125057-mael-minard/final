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
    <h2 class="title-header">Change account details</h2>
    <form action="php_scripts/account-change-details.php" method="post">
      <label for="email">Email:</label>
      <input type="text" disabled="disabled" id="email" name="email" value="<?php echo htmlspecialchars($user['user_email']) ?>"><br><br>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['user_name']) ?>"><br><br>
      <label for="country">Country:</label>
      <input type="text" id="country" name="country" value="<?php echo htmlspecialchars($address['address_country']) ?>"><br><br>
      <label for="city">City:</label>
      <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($address['address_city']) ?>"><br><br>
      <label for="street">Street:</label>
      <input type="text" id="street" name="street" value="<?php echo htmlspecialchars($address['address_street']) ?>"><br><br>
      <label for="house_nr">House Number:</label>
      <input type="text" id="house_nr" name="house_nr" value="<?php echo htmlspecialchars($address['address_house_number']) ?>"><br><br>
      <!-- Submit button -->
      <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Change</button>
    </form>
  </div>
</div>
