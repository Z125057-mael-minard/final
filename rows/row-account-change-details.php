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
    <form action="php_scripts/change_account_details.php" method="post">
      <!-- Name -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="text" id="form-name" class="form-control" name="name" placeholder="Old Password"/>
      </div>
      <!-- Country -->
      <div data-mdb-input-init class="form-outline mb-4">
          <input type="text" id="form-country" class="form-control" name="country" placeholder="New Password"/>
      </div>
      <!-- City -->
      <div data-mdb-input-init class="form-outline mb-4">
          <input type="text" id="form-city" class="form-control" name="city" placeholder="New Password"/>
      </div>

      <!-- Submit button -->
      <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Change</button>
    </form>
    <div id="login-error-text">
      <?php
      if (isset($_SESSION['change_error'])) {
        echo '<div class="alert alert-danger">' . htmlspecialchars($_SESSION['change_error']) . '</div>';
        unset($_SESSION['change_error']);
      }
      ?>
    </div>
  </div>
</div>
